<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * 
     * 
     * 
     */
    public function index(){

    }

    /**
     * Mostrar Formulario de login 
     * 
     * 
     */
    public function login(){
        return view('login');
    }

    /**
     * 
     * 
     * 
     */
    public function registro(){
        return view('registrarse');
    }
}
