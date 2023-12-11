<?php

namespace Database\Seeders;

use App\Models\CreateList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CreateList::create(
            [
                'name'=> "Helga",
                'email'=> 'helga@mail.com',
                'phone'=> 2233344,
                'password'=> '12345'
            ],
            
        );
        CreateList::create(     //На массив массивов - ругается!!
            [
                'name'=> "Olaf",
                'email'=> 'olaf@mail.com',
                'phone'=> 2233344,
                'password'=> '12345'
            ],
            
        );
        CreateList::create(
            [
                'name'=> "Alex",
                'email'=> 'alex@mail.com',
                'phone'=> 223355,
                'password'=> '12345'
            ],  
        );
    }
}
