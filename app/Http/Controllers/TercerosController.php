<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TercerosRequest;
use App\Models\Terceros;
use App\Models\Departamentos;
use App\Models\Ciudades;
use App\Models\TipoContribuyente;

class TercerosController extends Controller
{
    public function index(){
        $terceros = Terceros::with(['departamentos','municipios','tipo_contribuyente'])->get();
        return response()->json($terceros);
    }

    public function store(TercerosRequest $request)
    {

        $tercero = Terceros::create($request->all());

        if($tercero){

             return response()->json(
            [
                // 'tercero'=>$tercero,
                'message' => 'Usuario registrado exitosamente!',
                'code'=>200
            ]);
        }
        else{
            return response()->json(
            [
                //'tercero'=>$tercero,
                'message' => 'Error al registrar el usuario!',
                'code'=>401
            ]);
        }
      
    }

    public function edit($id)
    {
        $tercero = Terceros::findOrFail($id);
        return response()->json(['tercero' => $tercero]);
    }

    public function update(TercerosRequest $request, $id)
    {
        $tercero = Terceros::findOrFail($id);
        $terceroUp = $tercero->update($request->all());

        try {
            return response()->json([
                'message' => 'Tercero actualizado exitosamente!',
                'code'=>200
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Tercero no se actualizo exitosamente',
                'code'=>401
            ]);
        }
    }

    public function destroy($id)
    {
        $tercero = Terceros::findOrFail($id);
        $terceroDelete = $tercero->delete();

        if($terceroDelete)
        {
            return response()->json(['success'=> 'Tercero eliminado exitosamente!']);
        }
        else{
            return response()->json(['error'=> 'Error al eliminar el Tercero!']);
        }
    }

    public function getDepartamentos()
    {
        $departamentos = Departamentos::all();
        return response()->json($departamentos);
    }
    
    public function getCiudades()
    {
        $departamentos = Ciudades::all();
        return response()->json($departamentos);
    }
    
    public function getContri()
    {
        $departamentos = TipoContribuyente::all();
        return response()->json($departamentos);
    }

}
