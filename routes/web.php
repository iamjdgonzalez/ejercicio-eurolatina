<?php

use App\Http\Controllers\AdministrarProyectoController;
use App\Http\Controllers\CooperanteController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ReporteAdministracionProyectoController;
use Illuminate\Support\Facades\Route;

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

/*Principal*/
Route::get('/', function () {
    return view('inicio');
});

/*Cooperante*/
Route::get('/cooperante', [CooperanteController::class,'index'])->name('cooperantes');
Route::get('/cooperante.crear', [CooperanteController::class,'create'])->name('cooperante_crear');
Route::post('/cooperante.crear.confirmacion', [CooperanteController::class,'store'])->name('cooperante_crear_confirmacion');
Route::get('/cooperante.editar/{id}', [CooperanteController::class,'edit'])->name('cooperante_editar');
Route::post('/cooperante.editar.confirmacion/{id}', [CooperanteController::class,'update'])->name('cooperante_editar_confirmacion');
Route::get('/cooperante.eliminar/{id}', [CooperanteController::class,'destroy'])->name('cooperante_eliminar');
Route::resource('cooperante', CooperanteController::class);


/*Proyecto*/
Route::get('/proyecto', [ProyectoController::class,'index'])->name('proyectos');
Route::get('/proyecto.crear', [ProyectoController::class,'create'])->name('proyecto_crear');
Route::post('/proyecto.crear.confirmacion', [ProyectoController::class,'store'])->name('proyecto_crear_confirmacion');
Route::get('/proyecto.editar/{id}', [ProyectoController::class,'edit'])->name('proyecto_editar');
Route::post('/proyecto.editar.confirmacion/{id}', [ProyectoController::class,'update'])->name('proyecto_editar_confirmacion');
Route::get('/proyecto.eliminar/{id}', [ProyectoController::class,'destroy'])->name('proyecto_eliminar');
Route::resource('proyecto', ProyectoController::class);


/*Administrar Proyectos*/
Route::get('/administrar.proyecto', [AdministrarProyectoController::class,'index'])->name('administrar_proyecto');
//Route::get('/administrar.proyecto.crear', [AdministrarProyectoController::class,'create'])->name('administrar_proyecto_crear');
Route::post('/administrar.proyecto.crear.confirmacion', [AdministrarProyectoController::class,'store'])->name('administrar_proyecto_crear_confirmacion');
//Route::get('/administrar.proyecto.editar/{id}', [AdministrarProyectoController::class,'edit'])->name('administrar_proyecto_editar');
//Route::post('/administrar.proyecto.editar.confirmacion/{id}', [AdministrarProyectoController::class,'update'])->name('administrar_proyecto_editar_confirmacion');
//Route::get('/administrar.royecto.eliminar/{id}', [AdministrarProyectoController::class,'destroy'])->name('administrar_proyecto_eliminar');
Route::resource('administrar.proyecto', AdministrarProyectoController::class);


/*Reporte Administracion de Proyectos*/
Route::get('/reporte.administracion.proyecto', [ReporteAdministracionProyectoController::class,'index'])->name('reporte_administracion_proyecto');
Route::get('/reporte.administracion.proyecto.detalle/{id}', [ReporteAdministracionProyectoController::class,'detail'])->name('reporte_administracion_proyecto_detalle');
//Route::post('/reporte.administracion.proyecto.crear.confirmacion', [ReporteAdministracionProyectoController::class,'store'])->name('reporte_administracion_proyecto_crear_confirmacion');
//Route::get('/reporte.administracion.proyecto.editar/{id}', [ReporteAdministracionProyectoController::class,'edit'])->name('reporte_administracion_proyecto_editar');
//Route::post('/reporte.administracion.proyecto.editar.confirmacion/{id}', [ReporteAdministracionProyectoController::class,'update'])->name('reporte_administracion_proyecto_editar_confirmacion');
//Route::get('/reporte.administracion.royecto.eliminar/{id}', [ReporteAdministracionProyectoController::class,'destroy'])->name('reporte_administracion_proyecto_eliminar');
Route::resource('reporte.administracion.proyecto', ReporteAdministracionProyectoController::class);
