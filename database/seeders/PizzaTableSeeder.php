<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $pizza = new pizza();
            //popolo i campi
            $pizza->taste = $faker->randomElement(['margherita', 'rosmarino', 'quattro-stagioni', 'marinara', 'diavola']);
            $pizza->price = $faker->randomFloat(2);
            $pizza->save();
        }
    }
}
