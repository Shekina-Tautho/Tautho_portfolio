<?php

namespace App\Models;  

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{

    protected $table = 'navbar_items';

    protected $fillTable = [
        'label',
        'route',
    ];
}