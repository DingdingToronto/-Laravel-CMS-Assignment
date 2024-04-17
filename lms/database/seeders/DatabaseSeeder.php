<?php

namespace Database\Seeders;

use App\Models\Friend;

use App\Models\hobby;

use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
  

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> 'password',
        ]);
        Friend::factory(20)->create();

        hobby::factory()->create([
            'hobbyName'=>'Basketball',
        ]);
        hobby::factory()->create([
            'hobbyName'=>'Football',
        ]);
        hobby::factory()->create([
            'hobbyName'=>'Videogame',
        ]);
        hobby::factory()->create([
            'hobbyName'=>'Swimming',
        ]);
    }
}
