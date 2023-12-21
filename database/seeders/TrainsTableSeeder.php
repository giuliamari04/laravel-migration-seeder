<?php

namespace Database\Seeders;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->randomElement(['trenitalia','italo','frecciargento','frecciarossa']);
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time('H:i');
            $newTrain->orario_arrivo = $faker->time('H:i');
            $newTrain->codice = $faker->numberBetween(111111,999999);
            $newTrain->carrozza = $faker->numberBetween(1,9);
            $newTrain->in_orario = $faker->randomElement([1,0]);
            $newTrain->cancellato = $faker->randomElement([1,0]);


            $newTrain->save();

        }
    }

}
