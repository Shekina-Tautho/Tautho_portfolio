<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education')->insert([
            [
                'header1' => 'i’m a',
                'header2' => 'computer',
                'header3' => 'science student',
                'subtext' => 'at the University of St. La Salle',
                'organization' => 'AWS Cloud Clubs',
                'description' => 'Led the planning and execution of advocacy initiatives and programs of the AWS Cloud Clubs, fostering student engagement through events, campaigns, and community-driven activities.'
            ],
            [
                'header1' => null,
                'header2' => null,
                'header3' => null,
                'subtext' => null,
                'organization' => 'Google Developer Groups',
                'description' => 'Designed and produced visual materials for Google Developer Groups to support community events and initiatives, while continuously expanding creative and technical design skills.'
            ]
        ]);
    }
}
