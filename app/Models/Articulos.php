<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, string $string1)
 * @method static orderBy(string $string, string $string1)
 */
class Articulos extends Eloquent
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $connection = 'mongodb';
    protected $table = 'articulos';

    //ocultar los datos a no mostrarse
    protected $hidden =['created_at','updated_at'];

    protected $fillable = ['nombre','descripcion','precio' , 'stock', 'oferta','fecha_vnc'];



    public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'categoria', '_id');
        #return $this->belongsTo(Categorias::class, 'categoria_id', '_id');
    }



    public function carrito()
    {
        #hasmMany por que un articulo puede star en muchos carritos
        return $this->hasMany(Carrito::class, 'articulo_id', '_id');
    }




    public function Cat(){
        return $this->hasOne(Articulos::class,'categoria','_id');
    }

}
