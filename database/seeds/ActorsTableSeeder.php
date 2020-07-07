<?php

use Illuminate\Database\Seeder;
use App\Actor;
use Faker\Generator as Faker;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $dati_attori = config('actors');
        //
        // foreach ($dati_attori as $dati_attore) {
        //     $nuovo_attore = new Actor();
        //     $nuovo_attore->firstname = $dati_attore['nome'];
        //     $nuovo_attore->lastname = $dati_attore['cognome'];
        //     $nuovo_attore->save();
        // }

        for ($i=0; $i < 1000; $i++) {
            $nuovo_attore = new Actor();
            $nuovo_attore->firstname = $faker->firstName;
            $nuovo_attore->lastname = $faker->lastName;
            $nuovo_attore->save();
        }
    }
}
