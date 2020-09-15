<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\GachaMachine;
use App\Models\GachaCapsule;

class GachaMachineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GachaMachine::factory()->times(10)->hasGachaCapsule(10)->create();
    }
}
