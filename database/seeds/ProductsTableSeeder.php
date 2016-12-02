<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product =  new App\Product;

      $product->title = 'Daily Rental';
      $product->description = 'Daily Parking Rental';
      $product->price = 29.68;
      $product->save();

      $product =  new App\Product;

      $product->title = 'Weekly Rental';
      $product->description = 'Weekly Parking Rental';
      $product->price = 148.40;
      $product->save();

      $product =  new App\Product;

      $product->title = 'Monthly Rental';
      $product->description = 'Monthly Parking Rental';
      $product->price = 593.60;
      $product->save();
    }
}
