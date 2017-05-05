<?php

use App\Drink;
use Illuminate\Database\Seeder;

class DrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drink = new Drink;
        $drink->name = 'Host Special';
        $drink->default_price = 2.50;
        $drink->save();

        $drink = new Drink;
        $drink->name = 'RedBull';
        $drink->default_price = 2.50;
        $drink->save();

        $drink = new Drink;
        $drink->name = 'Dr Pepper';
        $drink->default_price = 2.50;
        $drink->save();

        $drink = new Drink;
        $drink->name = 'Dr Thunder';
        $drink->default_price = 2.50;
        $drink->save();
    }
}
