<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;

class UsersController extends Controller
{

    
    /**
     * Mostrar Index
     * 
     * 
     */

    public function index(){
        return view('index');
    }
    /**
     * Mostrar formulario de Registro
     * 
     * 
     */
    public function showRegistroForm(){
        return view('registrarse');
    }

    /**
     * validar datos desde Vue y axios
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
     * inicio de session
     * 
     * 
     */
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user=User::where('email',$email)->first();
        if($user){
            if(Auth::attempt(['email' => $email, 'password' => $password])){
                return redirect()->route('home');
            }else{
                return redirect()->route('login')->withErrors([
                    'email'=>'Verifica el correo o la contraseña.'
                ])->withInput(); 
            }
        }
        return redirect()->route('login')->withErrors([
            'email'=>'Este email no esta registrado, porfavor crea primero una cuenta.'
        ]);
    }

    /**
     * Cerrar secion 
     * 
     * 
     * 
     */
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('home');
    }

}
