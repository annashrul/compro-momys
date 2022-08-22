<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // User::create([
        //     'fname' => 'Muhammad Anas',
        //     'lname' => "Ma'ruf",
        //     'email' => 'anasmaruf@gmail.com',
        //     'phone_number' => '085526271924',
        //     'dob' => '11/09/2001',
        //     'birth_place' => 'JEPARA',
        //     'gender' => 'Male',
        //     'address' => 'Jl.wahid hasyim, bapangan jepara',
        //     'password' => bcrypt('password')
        // ]);

    }
}
