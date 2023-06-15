<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActaRequest;
use App\Models\Acta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActaController extends Controller
{
    public function index(){
        $actas = Acta::all();
        return view('actas.index', compact('actas'));
    }

    public function create(){
        return view('actas.create');
    }

    public function store(ActaRequest $request){
        $data = $request->validated();
       $data['idUsuario'] = Auth::user()->id;
      /*   if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = 'images/fotos/';
            $filename = time() . ' ' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('foto')->move($destinationPath, $filename);
            $data['foto'] = $destinationPath . $filename;
        }*/

        $acta = Acta::create($data);
        return redirect('/actas')->with('message','agregado');
    }

    public function edit($acta_id){
        $acta = Acta::find($acta_id);

        return view('acta.edit', compact('acta'));
    }

    public function detail($acta_id)
    {
        return view('acta.detail');
    }

    public function update(ActaRequest $request, $acta_id){

        $data = $request->validated();

        $acta = Acta::where('id', $acta_id)->update([
            'ape_paterno' => $data['ape_paterno'],
        ]);

        return redirect('/actas')->with('message','Datos actualizados');
        //return redirect('/add-acta')->with('message','acta agregado');
    }

    public function destroy($acta_id){
        $acta = Acta::find($acta_id)->delete();
        return redirect('/actas')->with('message', 'acta eliminada');
    }
}
