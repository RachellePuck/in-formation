<?php

namespace Database\Seeders;

use App\Models\Shift;
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
        // \App\Models\User::factory(10)->create();

        foreach(User::all() as $user) {
            Shift::factory(5)->create([
                'employee_id' => $user->id,
            ]);
        }
    }
}
