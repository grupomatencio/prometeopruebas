<?php

use Illuminate\Support\Facades\Route;


Route::view('/login', 'login')->name('login');
Route::view('/registro', 'register')->name('registro');
Route::view('/privada', 'secret')->name('privada');
Route::view('/Admin', 'secret')->name('Admin');
Route::view('/AdminDelegacion', 'secret')->name('AdminDelegacion');
Route::view('/Tecnico', 'secret')->name('Tecnico');


Route::post('/validar_registro', [LoginController::class, 'register'])->name('validar_registro');
Route::post('/inicio_sesion',  [LoginController::class, 'login'])->name('inicio_sesion');

Route::get('/logout',  [LoginController::class, 'logout'])->name('logout');









Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome')->name('welcome');

Route::get('/admin', function () {
    return ('Admin');
})->name('admin');

Route::get('/adminDelegation', function () {
    return ('AdminDelegation');
})->name('adminDelegation');;

Route::get('/tecnico', function () {
    return ('tecnico');
})->name('tecnico');;

