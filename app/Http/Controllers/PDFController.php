<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Ejemplo de PDF'];

        $pdf = new Dompdf();
        $pdf->loadHtml(view('pdf.template', $data));
        $pdf->render();

        return $pdf->stream('document.pdf');
    }
}
