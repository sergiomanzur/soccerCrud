<?php
namespace App\Http\Controllers;

use App\Models\Liga;
use Illuminate\Http\Request;

class LigaController extends Controller
{
    /**
     * Show the form for creating a new liga.
     */
    public function create()
    {
        return view('ligas.create');
    }

    /**
     * Store a newly created liga in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'es_liguilla' => 'required|boolean',
            'num_equipos_califican' => 'nullable|integer|min:2',
            'liguilla_a_dos_partidos' => 'nullable|boolean',
            'criterio_desempate' => 'nullable|in:goles_visitante,posicion_tabla,gana_partido',
        ]);

        $liga = Liga::create($request->all());

        return redirect()->route('ligas.create')->with('success', 'Liga creada con éxito.');
    }
}
