<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['skill'=>'HTML', 'level'=>'Advanced'],
            ['skill'=>'CSS', 'level'=>'Intermediate'],
            ['skill'=>'JavaScript', 'level'=>'Intermediate'],
            ['skill'=>'PHP', 'level'=>'Advanced'],
            ['skill'=>'Laravel', 'level'=>'Beginner'],
        ]);
    }
}
