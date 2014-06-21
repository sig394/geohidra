<?php
class UserSeeder extends Seeder {

    public function run()
    {
    	DB::table('users')->delete();
    	//creating the admin user
        $user = new User;
        $user->username = "admin";
        $user->email = "sig394@gmail.com";
        $user->password = Hash::make('123456');
        $user->save();
    }

}