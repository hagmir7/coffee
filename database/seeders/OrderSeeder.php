<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create(["creator" => 2, "server" => 3]);
        Order::create(["creator" => 2, "server" => 3]);
        Order::create(["creator" => 2, "server" => 3]);
        Order::create(["creator" => 2, "server" => 3]);
        Order::create(["creator" => 2, "server" => 4]);
        Order::create(["creator" => 2, "server" => 4]);
        Order::create(["creator" => 2, "server" => 4]);
        Order::create(["creator" => 2, "server" => 4]);
    }
}
