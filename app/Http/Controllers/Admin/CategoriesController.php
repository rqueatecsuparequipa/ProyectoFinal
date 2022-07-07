<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorias;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    //
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admins');
    }

    public function Home($module){

#$y = '629c039726570000ef0036f9';
        #$liscarrito= Carrito::with('articulos','usuarios')->where('usuario_id', $id )->get();
        #dd($liscarrito);
        #return view('aviato.cart')->with('liscarrito',$liscarrito); #carpeta/nombreb lade;
        $Cats = Categorias::where('module', $module)->orderBy('nombre','Asc')->get();
        $data = ['cats'=>$Cats];

        return view('Admin.Categories.Home', $data);
    }

    public function Add(Request $request){
        $rules = [
            'name' =>   'required',
            'icon' =>   'required',
        ];

        $messages = [
          'name.required' =>    'Se requiere de un nombre',
          'icon.required' =>    'Se requiere de un icono',
        ];

        $valid = Validator::make($request->all(), $rules, $messages);
        if ($valid->fails()):
            return back()->withErrors($valid)->with('message', 'Se a producido un error')->with('typealert', 'danger');
        else:

            $categoria = new Categorias();
            $categoria->module= $request->modole;               //e es para evitar daños
            $categoria->nombre = e($request->name);             //e para guardar no dañinos
            $categoria->slug = Str::slug($request->name);       //e para guardar no dañinos
            $categoria->icon = ($request->icon);                //e para guardar no dañinos

            if ($categoria->save()):
                #auth()->Login($User);
                return back()->with('message', 'Guardado con exito')->with('typealert', 'success');
            endif;
        endif;
    }

    public function Edit($id){
        $Cat = Categorias::find($id);
        $data = ['cat' => $Cat];

        return view('Admin.Categories.Edit', $data);
    }

    public function Store(Request $request, $id){
        $rules = [
            'name' =>   'required',
            'icon' =>   'required',
        ];

        $messages = [
            'name.required' =>    'Se requiere de un nombre',
            'icon.required' =>    'Se requiere de un icono',
        ];

        $valid = Validator::make($request->all(), $rules, $messages);
        if ($valid->fails()):
            return back()->withErrors($valid)->with('message', 'Se a producido un error')->with('typealert', 'danger');
        else:

            $categoria = Categorias::find($id);
            $categoria->module= $request->modole;               //e es para evitar daños
            $categoria->nombre = e($request->name);             //e para guardar no dañinos
            $categoria->slug = Str::slug($request->name);       //e para guardar no dañinos
            $categoria->icon = ($request->icon);                //e para guardar no dañinos
            if ($categoria->save()):
                #auth()->Login($User);
                return back()->with('message', 'Guardado con exito')->with('typealert', 'success');
            endif;
        endif;
    }

    public function Delete($id){
    $categoria = Categorias::find($id);
    if ($categoria->delete()):
        #auth()->Login($User);
        return back()->with('message', 'Categoria Eliminado')->with('typealert', 'success');
    endif;

}

}
