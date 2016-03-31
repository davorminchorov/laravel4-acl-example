<?php

use Illuminate\Database\Schema\Blueprint;

class CreateResourceTable extends BaseMigration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resources', function(Blueprint $table)
		{
		   $this
			   ->setTable($table)
			   ->addPrimary()
			   ->addString("name")
			   ->addString("pattern")
			   ->addString("target")
			   ->addBoolean("secure")
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
		Schema::dropIfExists("resources");
	}

}
