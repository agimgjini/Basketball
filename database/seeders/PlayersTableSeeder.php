<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                'fullname' => 'Giannis Papas',
                'age' => '19',
                'height' => '190',
                'weight' => '95'
            ],
            [
                'fullname' => 'Antonis Nikas',
                'age' => '19',
                'height' => '193',
                'weight' => '100'
            ]
        ]);
    }
}
