<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pacientes= Paciente::paginate();
        return view('paciente.index', compact('pacientes'))
        ->with('i', (request()->input('page', 1)-1)*$pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validacion de datos
        request()->validate(Paciente::$rules);

        //recepcionar todos los datos
        $pacienteData = request()->except("_token");
        Paciente::insert($pacienteData);
        return redirect()->route('paciente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
        $paciente= Paciente::find($id);
        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paciente=Paciente::findOrFail($id);

        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pacienteData=request()->except(['_token', '_method']);
        Paciente::where('id', '=', $id)->update($pacienteData);
        return redirect('paciente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Paciente::destroy($id);
        return redirect('paciente');
    }
}
