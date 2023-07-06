<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResolucionBuscarRequest;
use App\Http\Requests\ResolucionRequest;
use App\Models\Resolucion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ResolucionController extends Controller
{
    public function index()
    {
        $resoluciones = Resolucion::all();
        return view('resoluciones.index', compact('resoluciones'));
    }

    public function buscar(ResolucionBuscarRequest $request)
    {
        $data = $request->validated();
        $resoluciones = Resolucion::all()->where('dni', $data['dni']);
        //$acta = Acta::find(1);
        return view('resoluciones.index', compact('resoluciones'));
    }

    public function create()
    {
        return view('resoluciones.create');
    }

    public function store(ResolucionRequest $request)
    {
        $data = $request->validated();
        $data['idUsuario'] = Auth::user()->id;
        if ($request->hasFile('foto')) {
            
            $file = $request->file('foto');
            $destinationPath = 'images/fotos/';
            $filename = time() . ' ' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
           
            $imagePath =  $destinationPath . $filename;
            $image = Image::make($imagePath);        
            $image->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save($imagePath);
        }

        $resolucion = Resolucion::create($data);
        return redirect('/resoluciones')->with('message', 'agregado');
    }

    public function edit($resolucion_id)
    {
        $resolucion = Resolucion::find($resolucion_id);

        return view('resoluciones.edit', compact('resolucion'));
    }

    public function detail($resolucion_id)
    {
        return view('resoluciones.detail');
    }

    public function update(ResolucionRequest $request, $resolucion_id)
    {

        $data = $request->validated();

        $docente = Resolucion::where('id', $resolucion_id)->update([
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
            'idUsuario' => Auth::user()->id,
        ]);

        return redirect('/resoluciones')->with('message', 'Datos actualizados');
        //return redirect('/add-docente')->with('message','Docente agregado');
    }

    public function destroy($resolucion_id)
    {
        $resolucion = Resolucion::find($resolucion_id)->delete();
        return redirect('/resoluciones')->with('message', 'Docente eliminado');
    }
}
