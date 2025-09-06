<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::get('/', function () {
    return response()->json(['sucesso' => true]);
});

Route::apiResource('livros', LivroController::class);

Route::get('/user', function (Request $request) {
    return response()->json(['message' => 'Usuário não autenticado']);
});
