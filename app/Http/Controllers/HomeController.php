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
        return view('welcome');
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
