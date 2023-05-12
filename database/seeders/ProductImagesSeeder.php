<?php

namespace Database\Seeders;

use App\Models\ProductImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductImages::create(["path" => "/fake/product/image-1.png", "product_id" => 1]);
        ProductImages::create(["path" => "/fake/product/image-2.png", "product_id" => 1]);
        ProductImages::create(["path" => "/fake/product/image-3.png", "product_id" => 2]);
        ProductImages::create(["path" => "/fake/product/image-4.png", "product_id" => 2]);
        ProductImages::create(["path" => "/fake/product/image-5.png", "product_id" => 3]);
        ProductImages::create(["path" => "/fake/product/image-6.png", "product_id" => 3]);
        ProductImages::create(["path" => "/fake/product/image-7.png", "product_id" => 4]);
        ProductImages::create(["path" => "/fake/product/image-8.png", "product_id" => 4]);
        ProductImages::create(["path" => "/fake/product/image-9.png", "product_id" => 5]);
        ProductImages::create(["path" => "/fake/product/image-10.png", "product_id" => 5]);
        ProductImages::create(["path" => "/fake/product/image-11.png", "product_id" => 6]);
        ProductImages::create(["path" => "/fake/product/image-13.png", "product_id" => 6]);
        ProductImages::create(["path" => "/fake/product/image-13.png", "product_id" => 7]);
        ProductImages::create(["path" => "/fake/product/image-14.png", "product_id" => 7]);
        ProductImages::create(["path" => "/fake/product/image-15.png", "product_id" => 8]);
        ProductImages::create(["path" => "/fake/product/image-16.png", "product_id" => 8]);
        ProductImages::create(["path" => "/fake/product/image-17.png", "product_id" => 9]);
        ProductImages::create(["path" => "/fake/product/image-18.png", "product_id" => 9]);
        ProductImages::create(["path" => "/fake/product/image-19.png", "product_id" => 10]);
        ProductImages::create(["path" => "/fake/product/image-20.png", "product_id" => 10]);
    }
}
