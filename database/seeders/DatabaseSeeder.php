<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Owner;
use App\Models\Vehicle;
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
        User::factory()->create();
        Vehicle::factory()->count(10)->create();
    }
}
