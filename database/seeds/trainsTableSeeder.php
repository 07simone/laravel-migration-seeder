<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    for ($i=0; $i < 50 ; $i++) { 
        $newTrains = new Train();
        $newTrains->Azienda = $faker->word();
        $newTrains->StazioneDiPartenza = $faker->city();
        $newTrains->Stazione_di_arrivo = $faker->city();
        $newTrains->Orario_di_partenza = $faker->time('H:i:s');
        $newTrains->Orario_di_arrivo = $faker->time('H:i:s');
        $newTrains->Codice_treno = $faker->randomNumber(5, false);;
        $newTrains->Numero_Carrozze= $faker->numberBetween(0, 15);
        $newTrains->In_orario = $faker->boolean();
        $newTrains->Cancellato = $faker->boolean();
        $newTrains->image = $faker->imageUrl(640, 480, 'treni', true);
        $newTrains->save();
        }
    }
}
