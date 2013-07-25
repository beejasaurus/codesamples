<?php

class Create_Metrics_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('metrics', function($table){
			$table->increments('id');
			$table->string('email');
			$table->integer('steps');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('metrics');
	}

}