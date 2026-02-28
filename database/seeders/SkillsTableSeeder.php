<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills_page')->insert([
            [
                'header1' => 'tech',
                'header2' => '&',
                'header3' => 'tools',
                'description' => 'Here’s a snapshot of the tools and technologies I’m diving into as I explore web, cloud, and game development.',
                'tech' => 'HTML',
                'tool' => 'Git'
            ],
            [
                'header1' => null, 'header2' => null, 'header3' => null, 'description' => null,
                'tech' => 'CSS', 'tool' => 'Figma'
            ],
            [
                'header1' => null, 'header2' => null, 'header3' => null, 'description' => null,
                'tech' => 'JavaScript', 'tool' => 'Unity'
            ],
            [
                'header1' => null, 'header2' => null, 'header3' => null, 'description' => null,
                'tech' => 'Bootstrap', 'tool' => 'VSCode'
            ],
            [
                'header1' => null, 'header2' => null, 'header3' => null, 'description' => null,
                'tech' => 'PHP', 'tool' => null
            ],
            [
                'header1' => null, 'header2' => null, 'header3' => null, 'description' => null,
                'tech' => 'Laravel', 'tool' => null
            ]
        ]);
    }
}
