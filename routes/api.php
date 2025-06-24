<?php

use App\Http\Controllers\API\CategorieController;
use App\Http\Controllers\API\PatientController;
use App\Http\Controllers\API\ProduitController;
use App\Http\Controllers\SoinController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Exemple de test pour vérifier que l'API fonctionne
Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});

Route::apiResource('categories', CategorieController::class);
Route::apiResource('produits', ProduitController::class);
Route::apiResource('soins', SoinController::class);
Route::apiResource('patients', PatientController::class);