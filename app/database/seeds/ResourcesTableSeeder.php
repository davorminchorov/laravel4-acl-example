<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ResourcesTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$resources = [
			[
				"pattern" => "/",
				"name" => "users/login",
				"target" => "UsersController@login",
				"secure" => false
			],
			[
				"pattern" => "/request",
				"name" => "users/request",
				"target" => "UsersController@request",
				"secure" => false
			],
			[
				"pattern" => "/reset",
				"name" => "users/reset",
				"target" => "UsersController@reset",
				"secure" => false,
			],
			[
				"pattern" => "/logout",
				"name" => "users/logout",
				"target" => "UsersController@logout",
				"secure" => true
			],
			[
				"pattern" => "/profile",
				"name" => "users/profile",
				"target" => "UsersController@profile",
				"secure" => true
			],
			[
				"pattern" => "/groups/index",
				"name" => "groups/index",
				"target" => "GroupsController@index",
				"secure" => true
			],
			[
				"pattern" => "/groups/add",
				"name" => "groups/add",
				"target" => "GroupsController@add",
				"secure" => true
			],
			[
				"pattern" => "/groups/edit",
				"name" => "groups/edit",
				"target" => "GroupsController@edit",
				"secure" => true
			],
			[
				"pattern" => "/groups/delete",
				"name" => "groups/delete",
				"target" => "GroupsController@delete",
				"secure" => true
			]
		];

		foreach ($resources as $resource)
		{
			Resource::create($resource);
		}

	}

}