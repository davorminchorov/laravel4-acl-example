<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$users = [
			[
				"username" => "Ruffles",
				"password" => Hash::make("secret"),
				"email" => "ruffles@example.com"
			]

		];

		foreach ($users as $user)
		{
			User::create($user);
		}


	}

}