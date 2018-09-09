<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Categoria;
use App\Curso;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Validator;
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
            $curso->slug = Str::slug($nombre);
            $curso->categoria_id = $categoria;
            $curso->descripcion = $descripcion;
            if($user->isProfesor()){
                $validacion = Validator::make([
                    'slug'=>$curso->slug
                ],[
                    'slug'=>'required|unique:curso,slug'
                ],[
                    'slug.unique'=>'ya existe un Curso con este nombre',
                    'slug.required'=>'El nombre del curso es obligatorio'
                ]);
                if($validacion->fails()){
                    return response()->json(['result'=>false,'mensaje'=>$validacion->errors()->first('slug')]);
                }
                $curso->profesor_id= $user->profesor->id;
                if($curso->save()){
                    return response()->json(['result'=>true]);
                }else{
                    return response()->json(['result'=>false,'mensaje'=>'Lo sentimos, tenemos problemas, por favor intente mas tarde']);
                }                 
            }else{
                return response()->json(['result'=>false,'mensaje'=>'Pero tu que haces aqui? no eres un profesor']);
            }
        }
        return response()->json(['result'=>false,'mensaje'=>'Pero tu que haces aqui? no estas ni logeado!']);
    }
    /**
     * 
     * 
     * 
     */
    public function getCursos(){
        return response()->json(Curso::with('categoria')->paginate(6));
    }
}
