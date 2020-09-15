<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\GachaMachine;
use App\Models\GachaCapsule;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GachaMachineTableSeeder::class,
        ]);
    }
}
