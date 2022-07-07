<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Detalles extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $table = 'detalles';
    protected $fillable = ['_id'];
}
