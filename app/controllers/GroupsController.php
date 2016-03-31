<?php

class GroupsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('groups/index', [
			"groups" => Group::all()
		]);
	}


	public function add()
	{
		$form = new GroupForm();

		if($form->isPosted())
		{
			if($form->isValidForAdd())
			{
				Group::create([
					"name" => Input::get('name')
				]);

				return Redirect::route("groups/index");
			}

			return Redirect::route("groups/add")->withInput([
				"name" => Input::get('name'),
				"errors" => $form->getErrors()
			]);

		}

		return View::make('groups/add', [
			"form" => $form
		]);
	}

	public function edit()
	{
		$form = new GroupForm();

		$group = Group::findOrFail(Input::get('id'));

		$url = URL::full();

		if ($form->isPosted())
		{
			if($form->isValidForEdit())
			{
				$group->name = Input::get('name');
				$group->save();

				$group->users()->sync(Input::get("user_id", []));
				$group->resources()->sync(Input::get("resource_id", []));

				return Redirect::route("groups/index");
			}

			return Redirect::to($url)->withInput([
				"name" => Input::get('name'),
				"errors" => $form->getErrors(),
				"url" => $url
			]);
		}

		return View::make('groups/edit', [
			"form" => $form,
			"group" => $group,
			"users" => User::all(),
			"resources" => Resource::where("secure", true)->get()
		]);
	}

	public function delete()
	{
		$form = new GroupForm();

		if($form->isValidForDelete())
		{
			$group = Group::findOrFail(Input::get('id'));
			$group->delete();
		}

		return Redirect::route("groups/index");
	}

}
