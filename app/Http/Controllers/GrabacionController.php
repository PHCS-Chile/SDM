<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubirGrabacionRequest;
use App\Models\Evaluacion;
use App\Models\Grabacion;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GrabacionController extends Controller
{
    public function subir(SubirGrabacionRequest $request)
    {
//        dd($request);
        $grabacion = new Grabacion;
        if ($request->file()) {
            $name = $request->evaluacionid . "_grabacion." . $request->file('grabacion')->getClientOriginalExtension();
            $path = $request->file('grabacion')->storeAs('uploads', $name, 'public');
            $grabacion->evaluacion_id = $request->evaluacionid;
            $grabacion->nombre = $name;
            $grabacion->tamano = $request->file('grabacion')->getSize();
            $grabacion->save();

            return back()
                ->with('success','Se ha guardado la grabación.')
                ->with('file', $name);
        }
        return back()->withErrors(['msg', 'No se pudo subir la grabación (¿algo salió mal?)']);
    }

    public function embed(Request $request)
    {
        $filePath = storage_path() . '/app/public/grabaciones/' . $request->evaluacionid . '_grabacion.mp3';
        try {
            $file = file_exists ( $filePath );
            $headers = array(
                'Content-type'          => 'application/',
                'Content-Disposition'   => 'inline; filename="' . $filename . '"'
            );
        }
        catch (FileNotFoundException $e) {
            return back()->withErrors([ "Grabación no existe" ]);
        }
        return response()->file( $filePath );
    }

    public function eliminar($evaluacion_id)
    {
        $grabaciones = Grabacion::where('evaluacion_id', $evaluacion_id)->get();
        foreach ($grabaciones as $grabacion) {
            $grabacion->delete();
        }
        Storage::delete('uploads/' . $evaluacion_id . '_grabacion.mp3');
        return redirect(route('evaluacions.index', [$evaluacion_id]))->with('message', 'Grabación eliminada con éxito!');
    }

}
