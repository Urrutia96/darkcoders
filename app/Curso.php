<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $table ="curso";

    protected $fillable = [
        'categoria_id','profesor_id','nombre','slug','descripcion'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function profesor()
    {
        return $this->belongsTo('App\Profesor');
    }
    /**
     * 
     */
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}
