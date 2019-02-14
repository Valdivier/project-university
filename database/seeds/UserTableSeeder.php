<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**$user->email_verified_at =  date('Y-m-d H:i:s');*/
    public function run()
    {
        $role_user 			=		Role::where('name', 'user')->first();
        $role_admin 		=		Role::where('name', 'admin')->first();
        
        $user 				= 		new User();
        $user->name 		= 		'User';
        $user->lastname		= 		'Usuario';
        $user->email 		= 		'user@cinema.com';
        $user->password 	= 		bcrypt('secret');
        $user->img          =		'Default.jpg';
        $user->created_at   = 		date('Y-m-d H:i:s');
        $user->updated_at   =       date('Y-m-d H:i:s');
        $user->save();
        $user->roles()->attach($role_user);
        
        $user 				= 		new User();
        $user->name 		= 		'Admin';
        $user->lastname		= 		'Admnistrador';
        $user->email 		= 		'admin@cinema.com';
        $user->password 	= 		bcrypt('secret');
        $user->img          =		'Default.jpg';
        $user->created_at   = 		date('Y-m-d H:i:s');
        $user->updated_at   =       date('Y-m-d H:i:s');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
