<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $fillable = [
        'equipo_id',
        'nombre',
        'posicion',
        'fecha_nacimiento'
    ];

    /**
     * Relación uno a muchos inversa con Equipo.
     */
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
