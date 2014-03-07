<?php

class UserSeeder extends DatabaseSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = array(
			'username'	=> 'echo',
			'password'	=> Hash::make('password'),
			'email'		=> 'echo.emagz@gmail.com'
			);		
		User::create($user);
	}

}