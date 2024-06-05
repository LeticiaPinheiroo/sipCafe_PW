<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/contato', [FormController::class, 'mostraForm'])->name('form_contato');
Route::post('/contato', [FormController::class, 'enviarContato'])->name('enviar_contato');


Route::get('/home', function () {
    return view('index');
});

Route::get('/sobreNos', function () {
    return view('sobreNos');
});

Route::get('/contato', function () {
    return view('contato');
});