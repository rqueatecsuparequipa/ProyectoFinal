<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruevasController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FotosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\DetallesController;
use App\Http\Controllers\VueController;

use App\Http\Controllers\ApiController;

use App\Http\Controllers\Connect\LoginController;
use App\Http\Controllers\Connect\RegisterController;
use App\Http\Controllers\about\AboutController;
use App\Http\Controllers\Shop\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('principal');
});*/
/*---------------------------------------------Connect.css User----------------------------------------------*/
Route::get('/Login',[LoginController::class, 'Login'])        ->name('Login');
Route::post('/Login',[LoginController::class, 'store'])       ->name('store');
Route::get('/Register',[RegisterController::class, 'Register'])  ->name('Register');
Route::post('/Register',[RegisterController::class, 'Create'])   ->name('Create');
Route::get('/Logout',[LoginController::class, 'Destroy'])     ->name('Login.Destroy');


/*---------------------------------------------Principal----------------------------------------------*/
Route::get('/Administrador', [PrincipalController::class , 'prin'])->name('prueva.prin');




/*---------------------------------------------Pruevas----------------------------------------------*/

Route::get('/listarprueva', [PruevasController::class , 'listarprueva'])->name('prueva.listarprueva');
Route::get('/create', [PruevasController::class , 'create'])->name('prueva.create');
Route::get('/lif', [PruevasController::class , 'lif'])->name('prueva.lif');
Route::post('/add', [PruevasController::class , 'store'])->name('prueva.store');

Route::get('/editar/{id}', [PruevasController::class , 'editar'])->name('prueva.editar');
Route::delete('/destroy/{id}', [PruevasController::class , 'destroy'])->name('prueva.destroy');
Route::put('/update/{id}', [PruevasController::class , 'update'])->name('prueva.update');


/*---------------------------------------------Fotos----------------------------------------------*/
Route::get('/vistafoto', [FotosController::class , 'vistafoto'])->name('fotos.vistafoto');
Route::get('/cargar_foto', [FotosController::class , 'cargar_foto'])->name('fotos.cargar_foto');
Route::post('/addfoto', [FotosController::class , 'store'])->name('fotos.store');


/*---------------------------------------------Productos----------------------------------------------*/
Route::get('/registro', [ProductosController::class , 'registro'])->name('productos.registro'); #vista
Route::post('/addpro', [ProductosController::class , 'store'])->name('productos.store'); #registrar
Route::get('/vistarproducto', [ProductosController::class , 'vistarproducto'])->name('productos.vistarproducto');





/*---------------------------------------------Categoria----------------------------------------------*/
Route::get('/hojacategoria', [CategoriasController::class , 'hcat'])->name('categorias.hcat'); #vista categoria
Route::get('/createc', [CategoriasController::class , 'createc'])->name('categorias.createc'); # vista agregar categoria
Route::post('/addcategoria', [CategoriasController::class , 'storec'])->name('categorias.storec'); #agregar categoria
Route::delete('/destroyc/{id}', [CategoriasController::class , 'destroyc'])->name('categorias.destroyc'); #Eliminar

Route::get('/editarcat/{id}', [CategoriasController::class , 'editarcat'])->name('categorias.editarcat');

Route::put('/updatecat/{id}', [CategoriasController::class , 'updatecat'])->name('categorias.updatecat');


/*---------------------------------------------Articulo----------------------------------------------*/
Route::get('/hojarticulo', [ArticulosController::class , 'harti'])->name('articulos.harti');
Route::get('/createar', [ArticulosController::class , 'createar'])->name('articulos.createar');
Route::post('/addarticulo', [ArticulosController::class , 'storear'])->name('articulos.storear');
Route::delete('/destroyar/{id}', [ArticulosController::class , 'destroyar'])->name('articulos.destroyar');

Route::get('/busqueda', [ArticulosController::class , 'busqueda'])->name('articulos.busqueda');
Route::get('/descargarExcel', [ArticulosController::class, 'exportExcel'])->name('articulos.exportExcel');;
Route::get('/descargarPdf', [ArticulosController::class, 'exportPdf'])->name('articulos.exportPdf');;
      #nombre de ruta para acceder al blade            #clase                    #Otra froma de accrso al un blade
                                                                                 #ejm puede ser articulos.exportPdf
                                                                                 # o tambien una simple palabra como
                                                                                 #  hello

Route::get('/', [ArticulosController::class , 'tiendahome'])->name('productos.tiendahome');


/*---------------------------------------------Carrito----------------------------------------------*/
#Route::get('/Cart', [CarritoController::class , 'Cart'])->name('Carts');
Route::post('/addcarrito', [CarritoController::class , 'storecar'])->name('Cart.storecar');
Route::post('/addcarrito1', [CarritoController::class , 'storecar1'])->name('Cart.storecar1');
Route::get('/Cart/{id}', [CarritoController::class , 'ViewCart'])->name('Cart');
#Route::get('/hojacarrito', [CarritoController::class , 'hcarrito'])->name('carrito');
Route::post('/addusuario', [CarritoController::class , 'busquedacar'])->name('vercarrito');
Route::delete('/destruir/{id}', [CarritoController::class , 'destruir'])->name('Cart.destruir');
Route::get('/Carts/{id}', [CarritoController::class , 'PreViewCart'])->name('Carts');


/*---------------------------------------------Detalles----------------------------------------------*/


Route::get('/hojadetalle/{articulo_id}', [DetallesController::class , 'hdetalle'])->name('detalle');
Route::put('/adddetalle/{id}', [DetallesController::class , 'agre_actu'])->name('savedetalle');
Route::get('/vistaconfirmado/{id}', [DetallesController::class , 'confirmacion'])->name('confirmado');
Route::get('/continuar', [DetallesController::class , 'continuar'])->name('continuar');

/*---------------------------------------------Vue----------------------------------------------*/
Route::get('/vistavue', [VueController::class , 'index'])->name('vistavue');

Route::get('/cuerpo', [VueController::class , 'cuerpo'])->name('cuerpo');

Route::post('/acseso', [VueController::class , 'datos'])->name('acseso');
Route::get('/viewusuario', [VueController::class , 'usuarios'])->name('viewusuario');



/*---------------------------------------------VueArticulos----------------------------------------------*/
Route::get('/vuearticulo', [ArticulosController::class , 'vueharti'])->name('vuearticulo');

/*---------------------------------------------Api----------------------------------------------*/
#Route::get('/api2/{celular}', [ApiController::class , 'api2'])->name('api');
Route::get('/api3/{celular}', [ApiController::class , 'api3'])->name('api');

/*---------------------------------------------Apiproyecto----------------------------------------------*/
Route::get('/apiproyecto', [ApiController::class , 'apipro'])->name('apiproyecto');
Route::get('/prueva', [ApiController::class , 'apipost'])->name('prueva');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
#Route::get('/principal', [App\Http\Controllers\HomeController::class, 'p'])->name('principal');
#Route::get('/', [PrincipalController::class, 'prin'])->name('principal');

/*------------------------------------------------ABOUT-------------------------------------------*/
Route::get('/About', [AboutController::class, 'About'])->name('About');

/*------------------------------------------------SHOP-------------------------------------------*/
Route::get('/Shop', [ShopController::class, 'Home'])->name('Shop');
Route::get('/Shop/But', [ShopController::class, 'But'])->name('But');
Route::get('/Men', [ShopController::class, 'Men'])->name('Men');
Route::get('/Women', [ShopController::class, 'Women'])->name('Women');

/*------------------------------------------------PDF-----------------------------------------------*/
Route::get('/Detalle/PDF/{id}', [PDFController::class, 'Home'])->name('PDF');








/*------------------------------------------------ADMINISTRADOR-------------------------------------------*/
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoriesController;

Route::prefix('/Admin')->group(function (){
    Route::get('/',[AdminController::class, 'Admin']);
    Route::get('/Users',[UserController::class, 'Users']);

    //Module Products
    Route::get('/Products',[ProductController::class, 'Home']);
    Route::get('/Products/Add',[ProductController::class, 'Add']);
    Route::post('/Products/Add',[ProductController::class, 'Store']);
    Route::get('/Products/{id}/Edit',[ProductController::class, 'Edit']);
    Route::post('/Products/{id}/Edit',[ProductController::class, 'Create']);
    Route::get('/Products/{id}/Delete',[ProductController::class, 'Delete']);


    //Categories
    Route::get('/Categories/{module}',[CategoriesController::class, 'Home']);
    Route::post('/Category/Add',[CategoriesController::class, 'Add']);
    Route::get('/Category/{id}/Edit',[CategoriesController::class, 'Edit']);
    Route::post('/Category/{id}/Store',[CategoriesController::class, 'Store']);
    Route::get('/Category/{id}/Delete',[CategoriesController::class, 'Delete']);



});

/*---------------------------------------------Enviar correo---------------------------------------------*/

Route::get('/Contact', function ()
{return view('aviato.Contact');})->name('contact');

Route::post('messages', function (){
    //enviar un correo
    $data = request()->all();
    Mail::send("Emails.Message", $data, function ($message) use($data){
        $message->from($data['email'], $data['name'])
            ->to('ruben.quea@tecsup.edu.pe', 'Freddy Quea')
            ->subject($data['subject']);
    });
    //responder al usuario
    return back()->with('flash', $data['name'] . ', Tu mensaje ha sido recibido');
})->name('messages');




