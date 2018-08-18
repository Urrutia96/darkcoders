<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Mostrar formulario de Registro
     * 
     * 
     */
    public function showRegistroForm(){
        return view('registrarse');
    }

    /**
     * 
     * 
     * 
     */
    public function validateRegistro(Request $request){
        $credenciales=Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        
        if(!$credenciales->passes()){
            return response()->json($credenciales->errors());
        }
    }

    /**
     * Regitro de nuevo usuario
     * 
     * 
     */
    public function store(Request $request){
        $register = new RegisterController();        
        if($register->create($request->all())){
            return redirect()->route('login');
        }
    }

    /**
     * Mostrar formulario de login
     * 
     * 
     */
    public function showLoginForm(){
        return view('login');
    }

    /**
     * 
     * 
     * 
     */
    public function login(Request $request){

    }

}
