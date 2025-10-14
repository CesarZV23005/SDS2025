<?php
use lib\Route;
use app\controllers\HomeController;
use app\controllers\DiaController;
use app\controllers\InfoController;
use app\controllers\VisitaController;

Route::get("/", [HomeController::class, "index"]);
Route::get("/dia1", [DiaController::class, "dia1"]);
Route::get("/dia2", [DiaController::class, "dia2"]);
Route::get("/dia3", [DiaController::class, "dia3"]);
Route::get("/dia4", [DiaController::class, "dia4"]);
Route::get("/dia5", [DiaController::class, "dia5"]);
Route::get("/mi-informacion", [InfoController::class, "index"]);
Route::get("/visitas", [VisitaController::class, "formulario"]);
Route::post("/visitas", [VisitaController::class, "registrar"]);

lib\Route::dispatch();
