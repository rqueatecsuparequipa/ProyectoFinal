<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Productos;
use App\Models\Articulos;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        /*


                /*------------------------------------------------------------------*/
        /*   $url = 'http://127.0.0.1:5000/top';
           $url1 = 'http://127.0.0.1:5000/Add';
           $response = Http::get($url);
           $response1 = Http::get($url1);

           function RemoveSpecialChar($str)
           {
               $res = preg_replace('/[0-9\@\.\;\""]+/', '', $str);
               return $res;
           }
           $str = RemoveSpecialChar($response);
           $str1 = RemoveSpecialChar($response1);
           #echo  $str1;

           $destacado = Articulos::where('nombre', $str )->get();
           $segundo = Articulos::where('nombre', $str1 )->get();
           /*------------------------------------------------------------------*/

        /*------------------------------------------------------------------*/

        /*$prueva= User::all();
        $pro = Productos::all();
        return view('principal',compact('prueva','pro'));*/
        /*  $prueva= User::all();
          $listar = Articulos::all();
          return view('aviato.index',compact('prueva','listar','destacado','segundo'));
      }*/

        /*public function p()
        {
            return view('principal');
        }*/
    }
}
