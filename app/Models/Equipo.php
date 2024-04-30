<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'liga_id',
        'nombre'
    ];

    /**
     * Relación uno a muchos inversa con Liga.
     */
    public function liga()
    {
        return $this->belongsTo(Liga::class);
    }

    /**
     * Relación uno a muchos con Jugadores.
     */
    public function jugadores()
    {
        return $this->hasMany(Jugador::class);
    }
}
