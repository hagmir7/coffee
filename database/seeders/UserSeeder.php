<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'avatar' => '/fake/avatar/avatar-1.png',
            'first_name' => 'Bilal',
            'last_name' => "Bilal",
            'email' => 'bilal@gmail.com',
            'cin' => "CN394734",
            'address' => "Ain Chkaf, Fes. Morocco",
            'role_id' => 1,
            "password" => Hash::make('bilal123'),
        ]);


        User::create([
            'avatar' => '/fake/avatar/avatar-2.png',
            'first_name' => 'Anouar',
            'last_name' => "Anouar",
            'email' => 'anour@gmail.com',
            'cin' => "CN4343",
            'address' => "Madina, Fes. Morocco",
            'role_id' => 2,
            "password" => Hash::make('anouar123'),
        ]);


        User::create([
            'avatar' => '/fake/avatar/avatar-3.png',
            'first_name' => 'Hassan',
            'last_name' => "Agmir",
            'email' => 'hassan@gmail.com',
            'cin' => "CIN38477",
            'address' => "Ait Frigou, Almis Guigou. Morocco",
            'role_id' => 3,
            "password" => Hash::make('hassan123'),
        ]);

        User::create([
            'avatar' => '/fake/avatar/avatar-4.png',
            'first_name' => 'Mohamed',
            'last_name' => "Agmir",
            'email' => 'mohamed@gmail.com',
            'cin' => "CIN38478",
            'address' => "Ait Frigou, Almis Guigou. Morocco",
            'role_id' => 3,
            "password" => Hash::make('mohamed123'),
        ]);


    }
}
