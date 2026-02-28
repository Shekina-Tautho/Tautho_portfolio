<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            ['header'=>'connect.', 'link'=>'github.com/Shekina-Tautho'],
            ['header'=>null, 'link'=>'linkedin.com/ShekinaMelgarejoTautho'],
            ['header'=>null, 'link'=>'s2300921@usls.edu.ph']
        ]);
    }
}
