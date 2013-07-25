<?php

class Add_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
			'email'		=> 'testuser1234@test.com',
			'password'	=> Hash::make('password'),
			'name'		=> 'Test User',
			'team'		=> 'team1',
			'cumulative'=> 123546,
			'created_at'=> date('Y-m-d H:m:s'),
			'updated_at'=> date('Y-m-d H:m:s')
		));
		
		DB::table('metrics')->insert(array(
			'email'		=> 'testuser1234@test.com',
			'steps'		=> '61728',
			'created_at'=> date('Y-m-d H:m:s'),
			'updated_at'=> date('Y-m-d H:m:s')
		));
		
		DB::table('metrics')->insert(array(
			'email'		=> 'testuser1234@test.com',
			'steps'		=> '61728',
			'created_at'=> date('2012-07-25 10:00:00'),
			'updated_at'=> date('2012-07-26 10:00:00')
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->delete(1);
		DB::table('metrics')->delete(1);
		DB::table('metrics')->delete(2);
	}

}