<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';

    protected $fillTable = [
        'header1',
        'header2',
        'header3',
        'subtext',
        'organization',
        'description'
    ];
}
