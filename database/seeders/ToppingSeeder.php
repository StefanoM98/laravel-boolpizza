<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Topping;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toppings = ['pomodoro', 'mozzarella', 'wrustel', 'mais', 'olive', 'fior di latte', 'patatine', 'salame', 'prosciutto', 'mortadella', 'gorgonzola', 'speck'];

        foreach ($toppings as $topping) {
            $newTopping = new Topping();
            $newTopping->name = $topping;
            $newTopping->slug = Str::slug($topping);
            $newTopping->save();
        }
    }
}
