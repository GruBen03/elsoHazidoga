<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regiszracio;

Route::get('/', [regiszracio::class,"getContent"]);
