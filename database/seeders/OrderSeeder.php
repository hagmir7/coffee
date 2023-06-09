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
        Order::create(["creator_id" => 2, "server_id" => 3, 'table_id' => 1]);
        Order::create(["creator_id" => 2, "server_id" => 3, 'table_id' => 2]);
        Order::create(["creator_id" => 2, "server_id" => 3, 'table_id' => 3]);
        Order::create(["creator_id" => 2, "server_id" => 3, 'table_id' => 4]);
        Order::create(["creator_id" => 2, "server_id" => 4, 'table_id' => 5]);
        Order::create(["creator_id" => 2, "server_id" => 4, 'table_id' => 6]);
        Order::create(["creator_id" => 2, "server_id" => 4, 'table_id' => 7]);
        Order::create(["creator_id" => 2, "server_id" => 4, 'table_id' => 8]);
    }
}
