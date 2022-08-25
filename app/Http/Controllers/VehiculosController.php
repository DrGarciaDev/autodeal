<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\BD;

use App\Models\Vehiculo;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Anio;

class VehiculosController extends Controller
{
    public function index()
    {
    	$vehiculos = Vehiculo::orderBy('id', 'DESC')->paginate();

    	return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        $registro = new Vehiculo;
        $marcas   = Marca::all();
        $modelos  = Modelo::all();
        $anios    = Anio::all();

    	return view('vehiculos.create', ['registro' => $registro, 'marcas' => $marcas, 'modelos' => $modelos, 'anios' => $anios]);
    }

    public function store(Request $request)
    {
        // dd($request->input());
    	BD::crear('Vehiculo', $request);

    	return redirect()->route('vehiculos.index')->with('info', 'El vehículo fue guardado');
    }

    public function edit($id)
    {
    	$registro = Vehiculo::find($id);
        $marcas   = Marca::all();
        $modelos  = Modelo::all();
        $anios    = Anio::all();

    	return view('vehiculos.create', ['registro' => $registro, 'marcas' => $marcas, 'modelos' => $modelos, 'anios' => $anios]);
    }

    public function update(Request $request, $id)
    {
    	$data   =  $request->all();

        BD::actualiza($id, "Vehiculo", $data);

    	return redirect()->route('vehiculos.index')->with('info', 'El vehículo fue actualizado');
    }

    public function show($id)
    {
    	$registro = Vehiculo::find($id);
        $marcas   = Marca::all();
        $modelos  = Modelo::all();
        $anios    = Anio::all();

    	return view('vehiculos.show', ['registro' => $registro, 'marcas' => $marcas, 'modelos' => $modelos, 'anios' => $anios]);
    }

    public function destroy($id)
    {
    	BD::elimina($id, "Vehiculo");

    	return back()->with('info', 'El vehículo fue eliminado');
    }
}
