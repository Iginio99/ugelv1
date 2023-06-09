<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpedienteBuscarRequest;
use App\Http\Requests\ExpedienteRequest;
use App\Models\Expediente;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ExpedienteController extends Controller
{
    public function index()
    {
        $expedientes = Expediente::all();
        return view('expedientes.index', compact('expedientes'));
    }

    public function generatePDF($expediente_id)
    {
        $expediente = Expediente::find($expediente_id);
        $pdf = new Dompdf();
        $pdf->loadHtml(view('expedientes.pdf', compact('expediente')));
        $pdf->render();
        return $pdf->stream('document.pdf');
    }

    public function buscar(ExpedienteBuscarRequest $request)
    {
        $data = $request->validated();
        $expedientes = Expediente::all()->where('dni', $data['dni']);
        //$acta = Acta::find(1);
        return view('expedientes.index', compact('expedientes'));
    }

    public function create()
    {
        return view('expedientes.create');
    }

    public function store(ExpedienteRequest $request)
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

        $expediente = Expediente::create($data);
        return redirect('/expedientes')->with('message', 'agregado');
    }

    public function edit($expediente_id)
    {
        $expediente = Expediente::find($expediente_id);

        return view('expedientes.edit', compact('expediente'));
    }

    public function detail($expediente_id)
    {
        return view('docente.detail');
    }

    public function update(ExpedienteRequest $request, $expediente_id)
    {

        $data = $request->validated();

        $docente = Expediente::where('id', $expediente_id)->update([
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

        return redirect('/expedientes')->with('message', 'Datos actualizados');
        //return redirect('/add-docente')->with('message','Docente agregado');
    }

    public function destroy($expediente_id)
    {
        $docente = Expediente::find($expediente_id)->delete();
        return redirect('/expedientes')->with('message', 'Docente eliminado');
    }
}
