<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(IqTestSeeder::class);
        User::create([
            'name'=>'Yang',
            'email'=>'yang@gmail.com',
            'password'=>bcrypt('password')
        ]);


        // \App\Models\User::factory(10)->create();
    }
}
