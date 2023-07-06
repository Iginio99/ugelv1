<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActaBuscarRequest;
use App\Http\Requests\ActaRequest;
use App\Models\Acta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActaController extends Controller
{
    public function index()
    {
        $actas = Acta::all();
        return view('actas.index', compact('actas'));
    }

    public function buscar(ActaBuscarRequest $request)
    {
        $data = $request->validated();
        $actas = Acta::all()->where('dni', $data['dni']);
        //$acta = Acta::find(1);
        return view('actas.index', compact('actas'));
    }

    public function create()
    {
        return view('actas.create');
    }

    public function store(ActaRequest $request)
    {
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
        return redirect('/actas')->with('message', 'agregado');
    }

    public function edit($acta_id)
    {
        $acta = Acta::find($acta_id);

        return view('actas.edit', compact('acta'));
    }

    public function detail($acta_id)
    {
        return view('acta.detail');
    }

    public function update(ActaRequest $request, $acta_id)
    {

        $data = $request->validated();

        $acta = Acta::where('id', $acta_id)->update([
            'dni' => $data['dni'],
            'ap_paterno' => $data['ap_paterno'],    
            'ap_materno' => $data['ap_materno'],
            'nombres' => $data['nombres'],
            'tipo_doc' => $data['tipo_doc'],
            'numero' => $data['numero'],
            'periodo1' => $data['periodo1'],
            'fecha_de_exp_a_devolver' => $data['fecha_de_exp_a_devolver'],
            'proveido' => $data['proveido'],
            'fecha_proveido' => $data['fecha_proveido'],
            'num_exp_solicitud_devolucion' => $data['num_exp_solicitud_devolucion'],
            'periodo2' => $data['periodo2'],
            'fecha_devolucion' => $data['fecha_devolucion'],
            'firma' => $data['firma'],
            'foto' => $data['foto'],
            'fecha_registro' => $data['fecha_registro'],
            'observacion' => $data['observacion'],
            'idUsuario' => Auth::user()->id
        ]);

        return redirect('/actas')->with('message', 'Datos actualizados');
    }

    public function destroy($acta_id)
    {
        $acta = Acta::find($acta_id)->delete();
        return redirect('/actas')->with('message', 'acta eliminada');
    }
}
