<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->truncate();
        $faker = \Faker\Factory::create();
        foreach (range(1, 50) as $index) {
            State::create([
                'name' => $faker->state,
                'abbreviation' => $faker->stateAbbr
            ]);
        }
    }
}
