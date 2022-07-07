<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Articulos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    //

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function Home()

    {
        $product = Articulos::orderBy('precio','Desc')->get();
        $lista = Articulos::all();
        $data = ['pr'=>$product,'list'=>$lista];
        return view('Shop.Home', $data);
/*
        $productos = DB::table('articulos')->select('stock')->where('stock','<','300')->get();
        return $productos;
        /*$product = Articulos::orderBy('precio','Desc')->get();
        #$product = Articulos::all();
        $data = ['pr'=>$product];
        return view('Shop.Home', $data);
        #$productos = DB::table('articulos')->get();
        #$productos = Articulos::all();
        #$productos = DB::select('stock');
        #$productos = DB::table('detalles')->where('stock','>=','300')->get();
        #return $productos;*/

        /*


        return view('Shop.Home' , compact('productos'));
        /*
        $productos = Articulos::where('stock','100')->get();
        #$productos->where('stock',100);
        return $productos;

        #$validated = Validator::make($productos);
        $this->validate($productos, [
            'stock' => 'min:100'
        ]);
        if ($this->fails()):

            return $productos;
        #return back()->withErrors($validated)->with('message', 'Se a producido un error')->with('typealert', 'danger');
        else:
            return 'algo salio mal';
        endif;

            #$data = ['Products' => $productos];
            #return view('Shop.Home' , $data);*/
    }
    public function Men(){
        $hombre = '62be374c15000000b3007a43';
        $lista1 = Articulos::where('categoria', $hombre )->get();
        $lista = Articulos::all();
        $data = ['pr'=>$lista1,'list'=>$lista];
        return view('Shop.Men', $data);

    }

    public function Women(){
        /*$categoria = '62be375615000000b3007a44';
        function RemoveSpecialChar1($str)
        {
            $res = preg_replace('/[\@\.\;\""\{}]+/', '', $str);
            return $res;
        }
        $str = RemoveSpecialChar1($categoria);*/
        $mujer = '62be375615000000b3007a44';


        $lista1 = Articulos::where('categoria', $mujer )->get();
        $lista = Articulos::all();
        $data = ['pr'=>$lista1,'list'=>$lista];
        return view('Shop.Women', $data);

    }

    public function But(){
        return view('Shop.Product');
    }
}
