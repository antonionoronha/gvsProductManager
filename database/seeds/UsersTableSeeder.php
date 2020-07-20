<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gvs',
            'department'=>'TI',
            'password'=>bcrypt('admin'),
            'remember_token'=> str_random(10),
            'role_id'=>1,
        ]);
    }
}
