<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permisos';

    protected $fillable = [
        'id',
        'estado',
        'fecha_hora',
        'tipo_permiso',
        'estado',
        'usuario_id',
    ];

    // Relación con el modelo Usuario

    public function permisos(){
        return $this->belongsTo(Usuario::class, 'id','id_usuario');

    }
}
