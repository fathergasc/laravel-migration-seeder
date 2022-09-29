<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');
        for($i=0; $i<1000; $i++) {
            $newTrain = new Train();
            $newTrain->operator = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeThisYear('+2 months');
            $newTrain->arrival_time = $faker->dateTimeThisYear('+2 months');
            $newTrain->train_code = $faker->numberBetween(8000, 9999);
            $newTrain->cars = $faker->numberBetween(5, 12);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
