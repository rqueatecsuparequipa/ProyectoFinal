<?php

namespace App\Http\Controllers;


use App\Models\Articulos;
use App\Models\Carrito;
use App\Models\Detalles;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    //
    public function Home($id){
        $pru = Articulos::find($id);
        $user = Auth::user()->id;
        $users = User::where('_id', $user )->get();
        #return view('aviato.checkout', compact('pru'));

        #$pdf = "PDF::loadView('welcome');";
        $pdf = PDF::loadView('pdf.PDF', ['pru' => $pru,'user'=>$users]);
        return $pdf->download('Factura.pdf');

    }
}
