<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->insert(array( 

			'first_name'=>'Daniel',
			'last_name'=>'Canizalez',
			'email'=>'admin@admin.com',
			'password'=> \Hash::make('12345'),
			'type'	=> 'admin'


		));

		\DB::table('user_profile')->insert(array( 

			'user_id'=> 1,
			'birthdate'=> '1989/03/02'
			));
	}

}
