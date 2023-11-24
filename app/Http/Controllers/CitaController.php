<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;


class CitaController extends Controller
{
   
    public function index()
    {
        $cita = Cita::paginate();

        return view('cita.index', compact('cita'))///encontrado
            ->with('i', (request()->input('page', 1) - 1) * $cita->perPage());
    }

  
    public function create()
    {
        $cita = new Cita();
        return view('cita.create', compact('cita'));//encontrado
    }

   
    public function store(Request $request)
    {
        request()->validate(Cita::$rules);

        $cita = Cita::create($request->all());

        return redirect()->route('cita.index')
            ->with('success', 'Cita agendada correctamente.');///buscnado ruta
    }

   
    public function show($id)
    {
        $cita = Cita::find($id);

        return view('cita.show', compact('cita'));//ya
    }

   
    public function edit($id)
    {
        $cita = Cita::find($id);

        return view('cita.edit', compact('cita'));///
    }

  
    public function update(Request $request, Cita $cita)
    {
        request()->validate(Cita::$rules);

        $cita->update($request->all());

        return redirect()->route('cita.index')
            ->with('success', 'Cita actualizada correctamente');
    }

   
    public function destroy($id)
    {
        $cita = Cita::find($id)->delete();

        return redirect()->route('cita.index')
            ->with('success', 'Cita borrada');
    }
}
