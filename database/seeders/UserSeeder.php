<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make('admin');
        $user->role = "admin";
        $user->save();

        $customer = new User;
        $customer->name = "customer";
        $customer->email = "customer@gmail.com";
        $customer->password = Hash::make('customer');
        $customer->role = "customer";
        $customer->save();
    }
}
