<?php

use Illuminate\Database\Seeder;

class UserTableSeederExample extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $now = date('Y-m-d H:i:s');

        DB::table('users')->insert(array(
			array(
				'username'	=>	'YOUR_USERNAME', //Replace "YOUR_USERNAME" with your username
				'name'		=>	'YOUR_NAME', //Replace "YOUR_NAME" with your name
				'email'		=>	'YOUR_EMAIL', //Replace "YOUR_Email" with your email
				'password'	=>	Hash::make('YOUR_PASSWORD'), //Replace "YOUR_PASSWORD" with your password
				'created_at'=>	$now,
				'updated_at'=>	$now
			)
		));
    }
}
