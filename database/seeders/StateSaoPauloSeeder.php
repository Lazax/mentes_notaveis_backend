<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSaoPauloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $state = State::create([
            'name' => 'São Paulo',
        ]);

        City::create([
            'name' => 'São Caetano do Sul',
            'state_id' => $state->id
        ]);

        City::create([
            'name' => 'Osasco',
            'state_id' => $state->id
        ]);

        City::create([
            'name' => 'São Paulo',
            'state_id' => $state->id
        ]);

        City::create([
            'name' => 'Santo Andre',
            'state_id' => $state->id
        ]);
    }
}
