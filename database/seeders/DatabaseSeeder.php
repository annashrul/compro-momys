<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Role::create([
        //     'role' => 'Admin'
        // ]);
        // Role::create([
        //     'role' => 'User'
        // ]);
        // Role::create([
        //     'role' => 'Creator'
        // ]);
        // $faker = Faker::create();
        // foreach (range(1, 500) as $index) {
        //     DB::table('users')->insert([
        //         'fname' => $faker->firstname,
        //         'lname' => $faker->lastname,
        //         'email' => $faker->email,
        //         'phone_number' => $faker->numerify('##########'),
        //         'dob' => $faker->date($format = 'D-m-y', $max = '2010', $min = '1980'),
        //         'birth_place' => $faker->country,
        //         'gender' => 'male',
        //         'address' => $faker->address,
        //         'password' => $faker->password,
        //         'role_id' => 1
        //     ]);
        // }

        $faker = Faker::create();
        foreach (range(1, 500) as $index) {
            DB::table('products')->insert([
                'title' => $faker->title,
                'tagline' => "lorem ipsum",
                'content' => $faker->text,
                'price' => '10000',
                'weight' => '100kg',
                'user_id'  => 2
            ]);
        }

        // $faker = Faker::create();
        // foreach (range(1, 100) as $index) {
        //     DB::table('banners')->insert([
        //         'detail' => 'detail',
        //         'image' => "lorem ipsum",
        //     ]);
        // }
        // $faker = Faker::create();
        // foreach (range(1, 500) as $index) {
        //     DB::table('users')->insert([
        //         'fname' => $faker->firstname,
        //         'lname' => $faker->lastname,
        //         'email' => $faker->email,
        //         'phone_number' => $faker->numerify('##########'),
        //         'dob' => $faker->date($format = 'D-m-y', $max = '2010', $min = '1980'),
        //         'birth_place' => $faker->country,
        //         'gender' => 'male',
        //         'address' => $faker->address,
        //         'password' => $faker->password
        //     ]);
        // }
    }
}
