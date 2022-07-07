<?php

namespace App\Http\Controllers\Connect;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function Register(){
        #return 'Hola Mundo';
        return view('Connect.Register');
    }

    public function Create(Request $request)
    {

        //reglas de validacion
        $rules = [
            'name' => 'required',                               //Nombre requerido
            'lastname' => 'required',                           //Apellidos requerido
            'email' => 'required|email|unique:User,email',      //Correo reuqerido que sea de tipo email y unico
            'password' => 'required|min:8',                     //contraseña requuirido y minimo 8 digitos
            'cpassword' => 'required|min:8|same:password',      //confirmacion de pasword igual a password y minimo 8 digitos
        ];

        //Mensaje personalizado alert
        $message = [
            'name.required'         => 'Su nombre es requerido',
            'lastname.required'     => 'Su apellido es requerido',
            'email.required'        => 'Su corrreo electronico es requerido',
            'email.email'           => 'El formato de su correo electronico es invalido',
            'email.unique'          => 'Ya existe un usuario registrado con este correo electronico',
            'password.required'     => 'Ingrese una contraseña',
            'password.min'          => 'La contraseña debe de tener al menos 8 caracteres',
            'cpassword.required'    => 'Es necesario confirmar la contraseña',
            'cpassword.min'         => 'La confirmaion de la contraseña debe de tener al menos 8 caracteres',
            'cpassword.same'        => 'Las contraseñas no coinciden',
        ];

        $validated = Validator::make($request->all(), $rules, $message);
        if ($validated->fails()):
            return back()->withErrors($validated)->with('message', 'Se a producido un error')->with('typealert', 'danger');
        else:

            $User = new User();
            $User->name = e($request->name);                    //e es para evitar daños
            $User->lastname = e($request->lastname);            //e para guardar no dañinos
            $User->email = e($request->email);                  //e para guardar no dañinos
            $User->password = Hash::make($request->password);   //e para guardar no dañinos
            $User->role='0';

            if ($User->save()):
                #auth()->Login($User);
                return redirect('/Login')->with('message', 'Su usuario se creo con exito')->with('typealert', 'success');
            endif;

        endif;
    }
}
