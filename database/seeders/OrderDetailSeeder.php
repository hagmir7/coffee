<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderDetail::create(["order_id" => 1, "product_id" => 1, "quantity" => 2]);
        OrderDetail::create(["order_id" => 1, "product_id" => 1, "quantity" => 2]);

        OrderDetail::create(["order_id" => 2, "product_id" => 1, "quantity" => 1]);

        OrderDetail::create(["order_id" => 3, "product_id" => 3, "quantity" => 2]);
        OrderDetail::create(["order_id" => 3, "product_id" => 1, "quantity" => 2]);

        OrderDetail::create(["order_id" => 4, "product_id" => 1, "quantity" => 2]);
        OrderDetail::create(["order_id" => 4, "product_id" => 4, "quantity" => 2]);
        OrderDetail::create(["order_id" => 4, "product_id" => 1, "quantity" => 2]);
    }
}
