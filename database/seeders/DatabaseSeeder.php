<?php

namespace Database\Seeders;

use App\Models\Apellidos;
use App\Models\User;
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
        $user = User::factory()->create([
            'name' => 'Eduardo',
            'email' => 'echuquillanquiy@gmail.com',
            'username' => 'echuquillanquiy',
            'password' => bcrypt('12345678')
        ]);

        Apellidos::factory()->create([
           'user_id' => $user->id,
        ]);
        Apellidos::factory(999)->create();
    }
}
