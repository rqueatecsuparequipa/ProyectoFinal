<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Categorias extends Eloquent
{
    use HasFactory;
    use SoftDeletes;



    protected $connection = 'mongodb';
    protected $dates = ['deleted_at'];
    protected $table = 'categorias';

    //ocultar los datos a no mostrarse
    protected $hidden =['created_at','updated_at'];

    protected $fillable = ['nombre'];


    public function articulos()
    {
        #hasmMany por que una categoria tiene varios articulo
        return $this->hasMany(Articulos::class, 'categoria', '_id');
    }
}
