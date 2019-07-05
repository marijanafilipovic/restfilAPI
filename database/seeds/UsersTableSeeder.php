<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        $faker = \Faker\Factory::create();

        $password = Hash::make('autofill');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);

        for ($i = 0; $i < 10; $i++)
        {
            User::create([
                'name' => $faker->name,
            'email' => $faker->email,
                'password' => $faker->password,

            ]);
        }
    }
}
