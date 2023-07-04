<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\SolicitudAdopcion;
use Dompdf\Dompdf;
use Dompdf\Options;

class SolicitudAdopcionController extends Controller
{
    public function store(Request $request)
    {
        $this->validateFormData($request);

        // Generar el PDF del formulario
        $resumen = "<h1>Resumen de la solicitud:</h1>";
        $resumen .= "<p><strong>Nombres:</strong> {$request->input('nombres')}</p>";
        $resumen .= "<p><strong>Apellidos:</strong> {$request->input('apellidos')}</p>";
        $resumen .= "<p><strong>Teléfono:</strong> {$request->input('telefono')}</p>";
        $resumen .= "<p><strong>DNI:</strong> {$request->input('dni')}</p>";
        $resumen .= "<p><strong>Correo electrónico:</strong> {$request->input('correo')}</p>";
        $resumen .= "<p><strong>Experiencia con mascotas:</strong> {$request->input('experiencia')}</p>";

        $options = new Options();
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($resumen);
        $dompdf->render();
        $pdfContent = $dompdf->output();

        // Obtener el número de solicitudes existentes
        $solicitudesCount = SolicitudAdopcion::count();

        // Generar un nombre de archivo secuencial para el PDF
        $fileName = 'solicitud' . ($solicitudesCount + 1) . '.pdf';

        // Almacenar el PDF en la columna 'descripcion' en formato de texto
        $solicitud = new SolicitudAdopcion();
        $solicitud->descripcion = $fileName;

        $solicitud->save();

        // Almacenar el archivo PDF en el sistema de archivos
        Storage::disk('public')->put($fileName, $pdfContent);

        $this->validateFormData($request);

        $solicitud = [
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'telefono' => $request->input('telefono'),
            'dni' => $request->input('dni'),
            'correo' => $request->input('correo'),
            'experiencia' => $request->input('experiencia'),
        ];

        $request->session()->put('solicitud', $solicitud);

        return redirect()->route('mascotas.resumen-solicitud');
    }

    public function mostrarResumenSolicitud(Request $request)
    {
        $solicitud = $this->getSessionData($request);

        return view('mascotas.resumen-solicitud', compact('solicitud'));
    }

public function descargarResumen(Request $request)
{
    $solicitud = $this->getSessionData($request);

    if (!$solicitud) {
        return redirect()->route('mascotas.resumen-solicitud');
    }

    $htmlFile = public_path('resumen.html');

    $options = new Options();
    $options->set('isRemoteEnabled', true);

    $dompdf = new Dompdf($options);
    $dompdf->loadHtmlFile($htmlFile);
    $dompdf->render();
    $pdfContent = $dompdf->output();

    $response = response($pdfContent, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename=resumen_solicitud.pdf',
    ]);

    return $response;
}


    private function validateFormData(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'dni' => 'required',
            'correo' => 'required|email',
            'experiencia' => 'required',
        ]);
    }

    private function getSessionData(Request $request)
    {
        return $request->session()->get('solicitud');
    }
    public function descargarPDF($id)
    {
        $solicitud = SolicitudAdopcion::findOrFail($id);
        $fileName = $solicitud->descripcion;
        $filePath = public_path('storage/' . $fileName);

        return response()->download($filePath);
    }

}
