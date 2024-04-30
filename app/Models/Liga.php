<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Liga extends Model
{
    protected $fillable = [
        'nombre',
        'es_liguilla',
        'num_equipos_califican',
        'liguilla_a_dos_partidos',
        'criterio_desempate'
    ];

    /**
     * Relación uno a muchos con Equipos.
     */
    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
