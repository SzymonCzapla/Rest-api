<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class peopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<50;$i++){
            DB::table('people')->insert([
                'name'=>Str::random(10),
                'surname'=>Str::random(10),
                'telephone number'=>rand(100000000, 999999999),
                'street'=>Str::random(10),
                'city'=>Str::random(10),
                'country'=>Str::random(10)
            ]);
        }
    }
}
