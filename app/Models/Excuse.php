<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excuse extends Model
{
    protected $table = 'excusas';

    protected $fillable = [
            'id',
            'estado',
            'fecha_inicio',
            'fecha_fin' ,
            'descripcion',
            'evidencia',
            'tipo',
            'usuario_id'
    ];

    public function excuse(){
        return $this->belongsTo(Usuario::class, 'id','id_usuario');
    
}
}