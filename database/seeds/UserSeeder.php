<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\True_;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'CannonFoam',
            'email' => 'cannon@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '03321773514',
            'Country' => 'Pakistan',
            'address1' => 'Lahore, Pakistan',
            'city' => 'Lahore',
            'is_admin' => true,
        ]);
    }
}
