<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articulos;
use Illuminate\Http\Request;
use App\Models\Categorias;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    //
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admins');
    }

    public function Home(){
        $Products = Articulos::orderBy('id', 'desc')->paginate(25);
        $data = ['Product' => $Products];
        return view('Admin.Products.Home', $data);
    }

    public function Add(){



        $Cats = Categorias::all()->where('module', '0');
        $data = ['cats' => $Cats];
        return view('Admin.Products.Add', $data);
    }

    public function Store(Request $request)
    {

        $rules = [
            'name' => 'required',
            'img' => 'required|image',
            'price' => 'required',
            'contents' => 'required',
            'stock' => 'required',
        ];

        $messages = [
            'name.required' => 'El nombre del producto es requerido',
            'img.required' => 'Seleccione una imagen destacado',
            'img.image' => 'El Archivo no es una imagen',
            'price.required' => 'El precio del producto es requerido',
            'contents.required' => 'Ingrese una descripcion del producto',
            'stock.required' => 'Ingrese La cantidad de Productos'
        ];

        $valid = Validator::make($request->all(), $rules, $messages);
        if ($valid->fails()):
            return back()->withErrors($valid)->with('message', 'Se a producido un error')->with('typealert', 'danger')->withInput();
        else:
            /*
            //Variable donde se guardara cada imagen por fecha
            $path = '/'.date('Y-m-d');
            //Extraccion de extencion del archivo
            $fileExt = trim($request->file('img')->getClientOriginalExtension());
            $udload_path = Config::get('filesystems.disks.uploads.root');
            $name = Str::slug(str_replace($fileExt,'',$request->file('img')->getClientOriginalName()));
            $filename = rand(1,999).'-'.$name.'.'.$fileExt;

            /*Archivo final*/
            #$file_file = $udload_path.'/'.$path.'/'.$filename;

            $product = new Articulos();
            $product->estado = '0';
            $product->nombre = e($request->name);
            $product->slug = Str::slug($request->name);
            $product->categoria = e($request->category);
            $product->descripcion = e($request->contents);
            $product->file_path = date('Y-m-d');

            /*imagen*/
            $nomb = $_FILES['img']['name'];           # nombre de la foto ejm imganimal1.jpg
            $temporal = $_FILES['img']['tmp_name'];   # agrega la foto en un lugar temporal
            $carpeta = 'images/ropa/';              # lugar donde se alcenara la foto

            $ruta = $carpeta.'/'.$nomb;                  # nobre guardado en la bd ejm

            move_uploaded_file($temporal,$carpeta.'/'.$nomb); #movemos a nuestra carpeta destino
            $product->imagen= $ruta;   #le pasmos la ruta al para que sea agregada ala db en el campo imagen
            /*imagen*/

            $product->precio = e($request->price);
            $product->stock = e($request->stock);
            $product->oferta1 = e($request->discount);
            $product->oferta = e($request->indiscount);

            if ($product->save()):

               /* //Guardando el archivo img
                if ($request->hasFile('img')):
                    $f1 = $request->img->storeAs($path, $filename, 'uploads');
                    $img = Image::make($file_file);
                    $img->fit(256,256, function ($constraint){
                        $constraint->upsize();
                    });
                    $img->save($udload_path.'/'.$path.'/t_'.$filename);
                endif;*/

                #auth()->Login($User);
                return redirect('/Admin/Products')->with('message', 'Guardado con exito')->with('typealert', 'success');
            endif;

        endif;

    }

    public function Edit($id){
        $Products = Articulos::find($id);
        $Cats = Categorias::all()->where('module', '0');
        $data = ['cats' => $Cats , 'product' => $Products];
        return view('Admin.Products.Edit', $data);
    }

    public function Create($id, Request $request){


            $rules = [
                'name' => 'required',
                'price' => 'required',
                'contents' => 'required',
                'stock' => 'required',
            ];

            $messages = [
                'name.required' => 'El nombre del producto es requerido',
                'price.required' => 'El precio del producto es requerido',
                'contents.required' => 'Ingrese una descripcion del producto',
                'stock.required' => 'Ingrese La cantidad de Productos'
            ];

            $valid = Validator::make($request->all(), $rules, $messages);
            if ($valid->fails()):
                return back()->withErrors($valid)->with('message', 'Se a producido un error')->with('typealert', 'danger')->withInput();
            else:


                $product = Articulos::find($id);
                $product->estado = e($request->status);
                $product->nombre = e($request->name);
                $product->slug = Str::slug($request->name);
                $product->categoria = e($request->category);
                $product->descripcion = e($request->contents);
                if ($request->hasFile('img')):
                    /*imagen*/
                    $nomb = $_FILES['img']['name'];           # nombre de la foto ejm imganimal1.jpg
                    $temporal = $_FILES['img']['tmp_name'];   # agrega la foto en un lugar temporal
                    $carpeta = 'images/ropa/';              # lugar donde se alcenara la foto

                    $ruta = $carpeta.'/'.$nomb;                  # nobre guardado en la bd ejm

                    move_uploaded_file($temporal,$carpeta.'/'.$nomb); #movemos a nuestra carpeta destino
                    $product->imagen= $ruta;   #le pasmos la ruta al para que sea agregada ala db en el campo imagen
                    /*imagen*/
                    endif;
                $product->precio = e($request->price);
                $product->stock = e($request->stock);
                $product->oferta1 = e($request->discount);
                $product->oferta = e($request->indiscount);

                if ($product->save()):

                    #auth()->Login($User);
                    return back()->with('message', 'Actualizado')->with('typealert', 'success');
                endif;

            endif;

    }

    public function Delete($id){
        $product = Articulos::find($id);
        if ($product->delete()):
            #auth()->Login($User);
            return back()->with('message', 'Producto Eliminado')->with('typealert', 'success');
        endif;

    }

}


