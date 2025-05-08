<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FurnitureController;

// Route::get("/", function () {
//     return view('/all_furniture/index');
// });

Route::get('/home', function() {
    return view('home');
});

Route::get('/', [FurnitureController::class, "all_furniture"]);

Route::get("/add_furniture", function () {
    return view('add_furniture/index');
})->name('add_page');

Route::get("/all_furniture", [FurnitureController::class, "all_furniture"])->name("all_furniture");

Route::post('/addFurniture', [FurnitureController::class , 'createFurniture'])->name("add");


// UPDATING CONTROLLER
Route::post('/update_furniture/{id?}', [FurnitureController::class, 'update_furniture'])->name("update_furniture");
Route::get("/update_form/{FurnitureId}", [FurnitureController::class, 'updateForm'])->name("update_form");

// DELETE
Route::post("/delete_furniture/{FurnitureId?}", [FurnitureController::class, "deleteFurniture"])->name("delete_furniture");