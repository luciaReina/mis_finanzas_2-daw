<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();
        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'category' => 'gastos ' . rand(1, 10),
                'amount' => rand(100, 50), 
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }
        
        DB::table('outcomes')->insert($data);
    }
}