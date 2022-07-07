<?php

namespace App\Http\Controllers\Connect;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //

    //Constructor
    public function __construct()
    {
        $this->middleware('guest')->except(['Destroy']);

    }

    //view get Login Action
    public function Login(){
        #return 'Hola Mundo';
        return view('Connect.Login');
    }


    public function store(Request $request)
    {


        $rules = [
            'email' => 'required|email',        //Correo que sea de tipo email y unico
            'password' => 'required|min:8',     //contraseña minimo 8 digito
        ];

        //Mesajes pra cuanto haya errores
        $message = [
            'email.required'        => 'Su correo electronico es requerido',
            'email.email'           => 'El formato de su correo electronico es invalido',
            'password.required'     => 'Ingrese su contraseña',
            'password.min'          => 'La contraseña debe tener al menos 8 caracteres',
        ];



        //Validacion de datos
        $validated = Validator::make($request->all(), $rules, $message);
        if ($validated->fails()):
            return back()->withErrors($validated)->with('message', 'Se a producido un error')->with('typealert', 'danger');
        else:


            if (Auth::attempt(['email' => $request ->input('email'),'password' => $request->input('password')],true)):
                if (Auth::user()->role = "0"):
                    return redirect('/');
                else:
                    if (Auth::user()->role = "1"):
                        return redirect('/Admin');
                    endif;
                endif;
            else:
                return back()->with('message', 'Su correo o la contraseña es incorrecta')->with('typealert', 'danger');
            endif;
        endif;
    }

    public function Destroy(){
        Auth::logout();
        return redirect('/');
    }
}


/*--------------*/
