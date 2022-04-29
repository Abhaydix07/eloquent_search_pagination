<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker =Faker::create();
        $product= new product;
        for ($i=1; $i < 10; $i++) { 
            
            $product->product_name= $faker->company;
            $product->quantity= $faker->numberBetween(10, 500);
            $product->price= $faker->numberBetween(500, 2000);
            $product->save();
        }

    }
}
