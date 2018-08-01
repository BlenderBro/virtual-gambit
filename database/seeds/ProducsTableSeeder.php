<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProducsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 8; $i++){
        $product = new Product();
        $product->description = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at distinctio et maxime quasi. Aliquam dolorum earum harum maxime modi molestiae natus, officia praesentium quas quidem saepe sunt vero voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid at distinctio et maxime quasi. Aliquam dolorum earum harum maxime modi molestiae natus, officia praesentium quas quidem saepe sunt vero voluptatibus';
        $product->author = 'Ion Popescu';
        $product->features = str_random(8);
        $product->price = random_int(50, 90);

        $product->save();
        }
    }
}
