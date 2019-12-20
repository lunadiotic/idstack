<?php

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->display_name = 'Administrator';
        $role->description = 'Administrator';
        $role->save();

        $user = new User();
        $user->name = 'Admin';
        $user->username = 'admin';
        $user->email = 'admin@mail.com';
        $user->email_verified_at = now();
        $user->is_pro = true;
        $user->password = Hash::make('password');
        $user->save();

        $user->roles()->attach($role);
        $role = new Role();
        $role->name = 'member';
        $role->display_name = 'Member';
        $role->description = 'Member';
        $role->save();
    }
}
