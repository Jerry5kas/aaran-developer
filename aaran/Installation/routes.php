<?php

use Illuminate\Support\Facades\Route;

//Contact
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/soft', \App\Livewire\Installation\SoftInstallation\Index::class)->name('soft');

    Route::get('/maintenance/{id}', \App\Livewire\Installation\Maintenance\Index::class)->name('maintenance');

});
