<?php

class UsersController extends \BaseController {

	public function login()
	{
		$data = [];

		if ($this->isPostRequest())
		{
			$validator = $this->getLoginValidator();

			if ($validator->passes())
			{
				$credentials = $this->getLoginCredentials();

				if (Auth::attempt($credentials))
				{
					return Redirect::route("users/profile");
				}

				return Redirect::back()->withErrors(["password" => ["Credentials Invalid"]] );
			}
			else {
				return Redirect::back()->withInput()->withErrors($validator);
			}
		}

		return View::make('users/login');
	}

	public function profile()
	{
		return View::make('users/profile');
	}


	public function request()
	{
		if ($this->isPostRequest())
		{
			$response = $this->getPasswordRemindResponse();

			if ($this->isInvalidUser($response))
			{
				return Redirect::back()->withInput()->with('error', Lang::get($response));
			}

			return Redirect::back()->with('status', Lang::get($response));
		}

		return View::make('users/request');

	}

	public function reset($token)
	{
		if ($this->isPostRequest())
		{
			$credentials = Input::only('email', 'password', 'password_confirmation') + compact('token');

			$response = $this->resetPassword($credentials);

			if ($response === Password::PASSWORD_RESET)
			{
				return Redirect::route('users/profile');
			}

			return Redirect::back()->withInput()->with('error', Lang::get($response));
		}

		return View::make('users/reset', compact('token'));

	}

	public function logout()
	{
		Auth::logout();

		return Redirect::route("users/login");
	}

	protected function isPostRequest()
	{
		return Input::server("REQUEST_METHOD") == "POST";
	}

	protected function getLoginValidator()
	{
		return Validator::make(Input::all(),[
			"username" => "required",
			"password" => "required"
		]);
	}

	protected function getLoginCredentials()
	{
		return [
			"username" => Input::get('username'),
			"password" =>Input::get('password')
		];
	}

	protected function getPasswordRemindResponse()
	{
		return Password::remind(Input::only('email'));
	}

	protected function isInvalidUser($response)
	{
		return $response === Password::INVALID_USER;
	}

	protected function resetPassword($credentials)
	{
		return Password::reset($credentials, function($user, $password){
			$user->password = Hash::make($password);
			$user->save();
		});
	}
}
