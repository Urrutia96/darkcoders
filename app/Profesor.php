<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{    
    protected $table = "profesor";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion'
    ];

    /**
     * Get the user that owns the phone.
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
    /**
     * Get the comments for the blog post.
     */
    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

}
