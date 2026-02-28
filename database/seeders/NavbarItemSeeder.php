<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('navbar_items')->insert([
            ['label'=>'about', 'route'=>'/'],
            ['label'=>'skills', 'route'=>'/skills'],
            ['label'=>'projects', 'route'=>'/projects'],
            ['label'=>'education', 'route'=>'/education'],
            ['label'=>'contact', 'route'=>'/contacts']
        ]);
    }
}
