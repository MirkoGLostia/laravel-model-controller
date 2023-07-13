<?php

use App\Http\Controllers\Guest\PageController as PageController;


Route::get('/', [PageController::class, 'index']);