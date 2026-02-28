<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'header'=>'highlights.',
                'title'=>'Pomi',
                'description'=>'desktop pomodoro app using HTML, CSS, JavaScript and Node.js'
            ],
            [
                'header'=>null,
                'title'=>'Tick',
                'description'=>'minimalist task manager built with HTML, CSS, JavaScript, and Bootstrap'
            ],
            [
                'header'=>null,
                'title'=>'SugarSync',
                'description'=>'Java GUI app for managing sugarcane farm activities across seasons'
            ],
            [
                'header'=>null,
                'title'=>'Reserva',
                'description'=>'Web-based hotel reservation app built with HTML, CSS, JavaScript, Bootstrap, and PHP'
            ],
            [
                'header'=>null,
                'title'=>'Bzzy Land',
                'description'=>'3D casual bee game built in Unity, where players explore levels, collect items, and enjoy cozy gameplay.'
            ]
        ]);
    }
}
