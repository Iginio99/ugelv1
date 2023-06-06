<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpedienteRequest;
use App\Models\Expediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpedienteController extends Controller
{
    public function index(){
        $expedientes = Expediente::all();
        return view('expedientes.index', compact('expedientes'));
    }

    public function create(){
        return view('expedientes.create');
    }

    public function store(ExpedienteRequest $request){
        $data = $request->validated();
       $data['idUsuario'] = Auth::user()->id;
      /*   if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = 'images/fotos/';
            $filename = time() . ' ' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('foto')->move($destinationPath, $filename);
            $data['foto'] = $destinationPath . $filename;
        }*/

        $expediente = Expediente::create($data);
        return redirect('/expedientes')->with('message','agregado');
    }

    public function edit($expediente_id){
        $docente = Expediente::find($expediente_id);

        return view('docente.edit', compact('docente'));
    }

    public function detail($expediente_id)
    {
        return view('docente.detail');
    }

    public function update(ExpedienteRequest $request, $expediente_id){

        $data = $request->validated();

        $expediente = Expediente::where('id', $expediente_id)->update([
            'ape_paterno' => $data['ape_paterno'],
        ]);

        return redirect('/expedientes')->with('message','Datos actualizados');
        //return redirect('/add-docente')->with('message','Docente agregado');
    }

    public function destroy($expediente_id){
        $docente = Expediente::find($expediente_id)->delete();
        return redirect('/expedientes')->with('message', 'Docente eliminado');
    }
}
