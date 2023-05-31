<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuntosPaticipacion extends Model
{
    use HasFactory;
    
    protected $table = 'puntos_paticipacion';

    protected $fillable = [
        'id',
        'fecha',
        'puntos',
        'tema',
        'usuario_id',
    ];
    public function putos(){
        return $this->belongsTo(Usuario::class, 'id','id_usuario');

    }
}
