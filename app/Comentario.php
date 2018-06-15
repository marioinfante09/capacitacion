<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    //
    protected $table="comentarios";
    protected $fillable = [
        'nombre' , 'descripcion'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}
