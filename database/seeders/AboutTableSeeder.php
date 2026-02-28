<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about')->insert([
            [
                'header1' => 'hello, my name is',
                'header2' => 'shekina tautho.',
                'description' => 'Just getting started on exploring the world of cloud computing.'
            ],
            [
                'header1' => null,
                'header2' => null,
                'description' => 'When I’m not exploring technology, you can usually find me reading a good book or playing cozy games.'
            ]
        ]);
    }
}
