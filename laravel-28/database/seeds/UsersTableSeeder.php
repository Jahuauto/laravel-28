<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->insert([
//            'name' => 'guest',
//            'email' => 'guest@gmail.com',
//            'password' => bcrypt('secret'),
//            "created_at" =>  \Carbon\Carbon::now(), 
//            "updated_at" => \Carbon\Carbon::now(), 
//        ]);
//        
//        DB::table('users')->insert([
//            'name' => 'admin',
//            'email' => 'admin@gmail.com',
//            'password' => bcrypt('aqq'),
//            "created_at" =>  \Carbon\Carbon::now(), 
//            "updated_at" => \Carbon\Carbon::now(),
//        ]);
        
        
// 1 sposob na szytwno dodajemy id roli $user->roles()->attach(3);
        
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->password = bcrypt('aqq');
        $user->save();
        $user->roles()->attach(3);
 
// 2 sposob prze wyszukiwanie w bazie
        
        $role = Roles::where('name', 'Moderator')->first();
        $user = new User();
        $user->name = 'Guest';
        $user->email = 'guest@gmail.com';
        $user->password = bcrypt('aqq');
        $user->save();
        $user->roles()->attach($role);
        
        $role = Roles::where('name', 'Admin')->first();
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('aqq');
        $user->save();
        $user->roles()->attach($role);
    }
}
