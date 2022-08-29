<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories_place = ['mare', 'montagna', 'città'];

        for ($i=1; $i <= 20; $i++) { 
            // Creo una nuova riga
            $new_trip = new Trip();
            // popolo le righe con FakerPhp
            $new_trip->reference = $faker->randomNumber(5, true);
            $new_trip->category_place = $faker->randomElement($categories_place);
            $new_trip->place = $faker->city();
            $new_trip->description = $faker->paragraphs(7, true);
            $new_trip->price = $faker->randomFloat(2, 100, 10000);
            $new_trip->is_available = rand(0, 1);
            $new_trip->save();
        }
    }
}
