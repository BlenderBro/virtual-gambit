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
        for($i = 0; $i < 28; $i++){
        $product = new Product();
        $product->name = str_random( 16);
        $product->description = 'Seria S5 este una este cele mai populare serii de buget produse de catre Samsung. Are un ecran HD de 5.2", 2 GB ram, procesor octa-core si o camera de 13MP. Asa ca daca ai un telefon frumos si popular, iti recomandam sa ii protejezi spatele si colturile cu o Husă Dark Supreme Camo SAMSUNG Galaxy J5 2017, pentru ca stim cat de pretentios este spatele ala frumos, iar pentru ecran Guardo.shop recomanda o folie de sticla. Avem peste 3000 de design-uri diferite pentru husa ta personalizata, iar daca alegi sa cumperi 2 huse, facem noi cinste cu transportul!';
        $product->features = str_random(8);
        $product->image_url = 'images/phones/s5.png';
        $product->price = random_int(50, 90);

        $product->save();
        }
    }
}
