<?php

use App\Http\Controllers\DevController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\GrabacionController;
use App\Http\Controllers\PautaController;
use App\Http\Controllers\SupervisionController;
use App\Http\Controllers\UserEventController;
use App\Models\Evaluacion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignacionController;
use App\Http\Livewire\Calidad;
use App\Http\Livewire\Avances;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('phpinfo', function () {
    return phpinfo();
});

Route::get('/', function () {
    return redirect(route('dashboard'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $currentDate = date('Y-m-d');
    $evaluacionesdehoy = 0;
    $evaluacions = Evaluacion::where('user_id', Auth::user()->id)->get();
    foreach ($evaluacions as $evaluacion){
        $fechaupdated = date('Y-m-d', strtotime($evaluacion->updated_at));
        if($fechaupdated == $currentDate){
            $evaluacionesdehoy = $evaluacionesdehoy + 1;
        }
    }

    return view('dashboard', compact('evaluacions', 'evaluacionesdehoy'));
})->name('dashboard');


Route::post('/asignaciones',[AsignacionController::class,'periodo'])->name('asignacions.periodo')->middleware(['auth:sanctum', 'verified']);
Route::get('/asignaciones/{estudioid}/{periodoid}',[AsignacionController::class,'index'])->name('asignacions.index')->middleware(['auth:sanctum', 'verified']);
Route::get('/asignacion/{asignacionid}',[AsignacionController::class,'listar'])->name('asignacions.listar')->middleware(['auth:sanctum', 'verified']);
Route::get('/asignacion/{asignacionid}/{rutejecutivo}',[AsignacionController::class,'ejecutivoevaluaciones'])->name('asignacions.ejecutivoevaluaciones')->middleware(['auth:sanctum', 'verified']);
Route::get('/asignacion_voz/{asignacionid}',[AsignacionController::class,'EjecutivoEvaluacionesCallVoz'])->name('asignacions.ejecutivoevaluacionescallvoz')->middleware(['auth:sanctum', 'verified']);

Route::get('/reporte/{evaluacionid}',[EvaluacionController::class,'reporte'])->name('evaluacions.reporte')->middleware(['auth:sanctum', 'verified']);
//Route::get('/reportes/',[EvaluacionController::class,'reportes'])->name('evaluacions.reportes')->middleware(['auth:sanctum', 'verified']);
Route::get('/reportes',[EvaluacionController::class,'reportes'])->name('evaluacions.reportes')->middleware(['auth:sanctum', 'verified']);
Route::post('/reportes',[EvaluacionController::class,'reportes'])->name('evaluacions.reportes_filtrado')->middleware(['auth:sanctum', 'verified']);
Route::post('/reportes/crear', [EvaluacionController::class, 'crearReporte'])->name('evaluacions.crear_reporte')->middleware(['auth:sanctum', 'verified']);

Route::get('/calidad',Calidad::class)->name('calidad.index')->middleware(['auth:sanctum', 'verified']);
Route::get('/avances',Avances::class)->name('avances.index')->middleware(['auth:sanctum', 'verified']);

Route::get('/evaluacion/{evaluacionid}',[EvaluacionController::class,'index'])->name('evaluacions.index')->middleware(['auth:sanctum', 'verified']);
Route::get('/evaluacion/{evaluacionid}/chat',[EvaluacionController::class,'chat'])->name('evaluacions.chat')->middleware(['auth:sanctum', 'verified']);
Route::get('/evaluacion/{evaluacionid}/notify',[EvaluacionController::class,'indexNotify'])->name('evaluacions.index.notify')->middleware(['auth:sanctum', 'verified']);
Route::get('/evaluacion/{evaluacionid}/atras',[EvaluacionController::class,'atrasDesbloqueando'])->name('evaluacions.atras_desbloqueando')->middleware(['auth:sanctum', 'verified']);
//Route::get('/evaluacion/{evaluacionid}', PautaWhatsapp::class)->name('digital.index')->middleware(['auth:sanctum', 'verified']);
Route::post('/evaluacion/{evaluacionid}',[EvaluacionController::class,'guardaeval'])->name('evaluacions.guardaeval')->middleware(['auth:sanctum', 'verified']);
Route::delete('/evaluacion/{evaluacionid}', [PautaController::class, 'resetici'])->name('evaluacions.resetici')->middleware(['auth:sanctum', 'verified']);

Route::post('evaluacion/{evaluacionid}/subir_grabacion', [GrabacionController::class, 'subir'])->name('evaluacions.grabacion')->middleware(['auth:sanctum', 'verified']);
Route::post('evaluacion/{evaluacionid}/guardar_link', [GrabacionController::class, 'guardarLink'])->name('evaluacions.link')->middleware(['auth:sanctum', 'verified']);
Route::delete('evaluacion/{evaluacionid}/borrar_link', [GrabacionController::class, 'borrarLink'])->name('evaluacions.borrar_link')->middleware(['auth:sanctum', 'verified']);
Route::get ( '/evaluacion/{evaluacionid}/grabacion',  [GrabacionController::class, 'embed'])->name('evaluacions.embed_audio')->middleware(['auth:sanctum', 'verified']);
Route::delete( '/evaluacion/{evaluacionid}/eliminar_grabacion',  [GrabacionController::class, 'eliminar'])->name('evaluacions.eliminar_grabacion')->middleware(['auth:sanctum', 'verified']);
Route::delete('evaluacion/{evaluacionid}/grabacion_no_evaluable', [PautaController::class, 'grabacionNoEvaluable'])->name('evaluacions.grabacion_no_evaluable')->middleware(['auth:sanctum', 'verified']);
Route::delete('evaluacion/{evaluacionid}/sin_grabacion', [PautaController::class, 'grabacionNoExiste'])->name('evaluacions.sin_grabacion')->middleware(['auth:sanctum', 'verified']);

Route::get('perfil/{perfil}', [DevController::class, 'cambiarPerfil'])->name('perfil')->middleware(['auth:sanctum', 'verified']);
Route::get('usuario/notificaciones', [UserEventController::class, 'notificaciones'])->name('usuario.notificaciones')->middleware(['auth:sanctum', 'verified']);

Route::get('supervision/bloqueos', [SupervisionController::class, 'bloqueos'])->name('supervision.bloqueos')->middleware(['auth:sanctum', 'verified']);
Route::post('supervision/bloqueos', [SupervisionController::class, 'desbloquear'])->name('supervision.desbloquear')->middleware(['auth:sanctum', 'verified']);
