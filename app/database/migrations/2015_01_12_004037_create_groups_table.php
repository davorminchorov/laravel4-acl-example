<?php

use Illuminate\Database\Schema\Blueprint;

class CreateGroupsTable extends BaseMigration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('groups', function(Blueprint $table)
		{
		    $this
				->setTable($table)
				->addPrimary()
				->addString("name")
				->addTimestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists("groups");
	}

}
