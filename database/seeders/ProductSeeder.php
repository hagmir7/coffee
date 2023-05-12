<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name" => "Espresso-based drinks",
            "category_id" =>  1,
            'price' => 10,
            "description" => "This includes a variety of drinks made with espresso, such as cappuccino, latte, macchiato, Americano, and mocha."
        ]);

        Product::create([
            "name" => "Drip coffee",
            "category_id" =>  1,
            'price' => 9,
            "description" => "Most coffee restaurants offer brewed coffee, which can be served hot or iced."
        ]);

        Product::create([
            "name" => "Tea",
            "category_id" =>  1,
            'price' => 10,
            "description" => "Some coffee shops offer a selection of teas, including black tea, green tea, herbal teas, and specialty blends."
        ]);

        Product::create([
            "name" => "Bakery items",
            "category_id" =>  2,
            'price' => 50,
            "description" => "This includes a variety of baked goods, such as croissants, muffins, scones, cookies, and pastries."
        ]);

        Product::create([
            "name" => "Breakfast sandwiches",
            "category_id" =>  2,
            'price' => 59,
            "description" => "Many coffee restaurants serve breakfast sandwiches, which typically consist of eggs, cheese, and meat on a bagel or English muffin."
        ]);

        Product::create([
            "name" => "Paninis and sandwiches",
            "category_id" =>  2,
            'price' => 59,
            "description" => "Some coffee shops offer a selection of paninis and sandwiches, which can include vegetarian and meat-based options."
        ]);


        Product::create([
            "name" => "Salads",
            "category_id" =>  3,
            'price' => 20,
            "description" => "Some coffee shops offer salads, which can include a variety of greens, vegetables, and protein."
        ]);


        Product::create([
            "name" => "Smoothies and juices",
            "category_id" =>  3,
            'price' => 29,
            "description" => "Some coffee shops offer fresh fruit smoothies, vegetable juices, and other healthy drinks."
        ]);


        Product::create([
            "name" => "Cold beverages",
            "category_id" =>  3,
            'price' => 29,
            "description" => "Apart from coffee, there are other cold beverages, such as iced coffee, iced tea, soda, and bottled water."
        ]);



        Product::create([
            "name" => "Snacks and sweets",
            "category_id" =>  4,
            'price' => 39,
            "description" => "Some coffee shops offer snacks like chips, granola bars, and trail mixes, as well as sweet treats like chocolates and candies."
        ]);



    }
}
