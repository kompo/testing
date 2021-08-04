<?php

use App\Http\Komposers\TestForm;
use Illuminate\Support\Facades\Route;

Route::layout('kompo::app')->group(function(){
	Route::get('test/{id}', TestForm::class);
});