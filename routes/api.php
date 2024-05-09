<?php

use App\Http\Controllers\Api\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('image',[ImageController::class, 'imageStore']);
Route::get('test', function(){
    echo \App\Post::limit(3)->get();
});