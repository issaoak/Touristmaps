<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rutas para Admin
Route::view('/admin/configuraciones', 'admin.configuraciones')->name('admin.configuraciones');
Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
Route::view('/admin/habitacion', 'admin.habitacionadmin')->name('admin.habitacionadmin');
Route::view('/admin/habitaciones', 'admin.habitaciones')->name('admin.habitaciones');
Route::view('/admin/reportes', 'admin.reportes')->name('admin.reportes');
Route::view('/admin/usuarios', 'admin.usuarios')->name('admin.usuarios');
Route::view('/admin/vuelos', 'admin.vuelos')->name('admin.vuelos');

// Rutas para Usuario
Route::view('/busqueda_hoteles', 'usuario.busqueda_hoteles')->name('busqueda_hoteles');
Route::view('/iniciar_sesion', 'usuario.iniciar_sesion')->name('iniciar_sesion');
Route::view('/', 'usuario.inicio')->name('inicio');
Route::view('/buscar', 'usuario.buscar')->name('buscar');
Route::view('/carrito', 'usuario.carrito')->name('carrito');

Route::view('/reserva_pagar', 'usuario.reserva_pagar')->name('reserva_pagar');
Route::view('/confirpagohotel', 'usuario.confirmar_pago_hotel')->name('confirmar_pago_hotel');
Route::view('/busqueda_vuelo', 'usuario.busqueda_vuelo')->name('busqueda_vuelo');
Route::view('/perfil', 'usuario.perfil')->name('perfil');
Route::view('/hoteles', 'usuario.hoteles')->name('hoteles');
Route::view('/resultados_vuelos', 'usuario.resultados_vuelos')->name('resultados_vuelos');
Route::view('/registro', 'usuario.registro')->name('registro');
Route::view('/historialReservaciones', 'usuario.historialReservaciones')->name('historialReservaciones');


Route::view('/confirmacioncorreo', 'usuario.confirmacioncorreo')->name('confirmacioncorreo');
Route::view('/confirmaciontelefono', 'usuario.confirmaciontelefono')->name('confirmaciontelefono');
Route::view('/recuperar_contrasena', 'usuario.recuperar_contrasena')->name('recuperar_contrasena');



Route::view('/cancelar_reservacion', 'usuario.cancelar_reservacion')->name('usuario.cancelar_reservacion');
Route::view('/escoger_habitacion', 'usuario.escoge_habitacion')->name('usuario.escoger_habitacion');
Route::view('/escoger_asiento', 'usuario.escogerAsiento')->name('usuario.escoger_asiento');
Route::view('/resultados', 'usuario.resultados')->name('usuario.resultados');

require __DIR__.'/auth.php';
