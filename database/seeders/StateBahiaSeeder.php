<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateBahiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $state = State::create([
            'name' => 'Bahia',
        ]);

        City::create([
            'name' => 'Salvador',
            'state_id' => $state->id
        ]);

        City::create([
            'name' => 'Feira de Santana',
            'state_id' => $state->id
        ]);

        City::create([
            'name' => 'Lauro de Freitas',
            'state_id' => $state->id
        ]);
    }
}
