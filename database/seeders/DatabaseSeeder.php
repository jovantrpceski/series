<?php

namespace Database\Seeders;

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
        DB::table('series')->create([
            'title' => 'Band of Brothers',
            'description' => 'The story of Easy Company of the U.S. Army 101st Airborne Division,
            and their mission in World War II Europe, from Operation Overlord, through V-J Day.',

        ]);
        DB::table('series')->create([
            'title' => 'Freaks and Geeks ',
            'description' => 'A high school mathlete starts hanging out with a group of burnouts
             while her younger brother navigates his freshman year.',
        ]);

        DB::table('episodes')->create([
            'title' => 'Currahee',
            'series_id' => 1,
            'season_number' => 1,
            'episode_number' => 1,
        ]);
        DB::table('episodes')->create([
            'title' => 'Day of Days ',
            'series_id' => 1,
            'season_number' => 1,
            'episode_number' => 2,
        ]);
        DB::table('episodes')->create([
            'title' => 'Carentan',
            'series_id' => 1,
            'season_number' => 1,
            'episode_number' => 3,
        ]);
        DB::table('episodes')->create([
            'title' => 'Pilot',
            'series_id' => 2,
            'season_number' => 1,
            'episode_number' => 1,
        ]);

    }
}
