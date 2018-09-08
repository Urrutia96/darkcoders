<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Categoria;
use App\Curso;
class UsersController extends Controller
{
    /**
     * 
     * 
     * 
     */
    public function getUsers(){
    	return response()->json(User::all());
    }

    /**
     * 
     * 
     * 
     */
    public function getCategories(){
        return response()->json(Categoria::select('id','nombre')->get());
    }
    /**
     * 
     * 
     * 
     */
    public function crearCurso(Request $request){
        if($request->profesor){
            $nombre = $request->nombre;
            $categoria = $request->categoria;
            $descripcion = $request->descripcion;  
            $user_request = $request->profesor;
            $user = User::findOrFail($user_request['id']);
            $curso = new Curso();
            $curso->nombre = $nombre;
            $curso->categoria_id = $categoria;
            $curso->descripcion = $descripcion;
            $curso->profesor_id= $user->profesor->id;
            if($curso->save()){
                return response()->json(['result'=>true]);
            }
            return response()->json(['result'=>false]);
        }
    }
}
