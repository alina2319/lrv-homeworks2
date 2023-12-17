<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            ['brand' => 'Volvo', 'model' => 'XC90', 'price' => '4000000', 'created_at' => '2023-02-22 19:45:07', 'updated_at' => '2023-02-22 19:45:07'],
            ['brand' => 'BMW', 'model' => 'X6', 'price' => '5000000', 'created_at' => '2023-02-22 19:45:07', 'updated_at' => '2023-02-22 19:45:07'],
            ['brand' => 'Chery', 'model' => 'Tiggo 7', 'price' => '1000000', 'created_at' => '2023-02-22 19:45:07', 'updated_at' => '2023-02-22 19:45:07']
        ]);
    }
}
