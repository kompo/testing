<?php

use App\Http\Komposers\TestForm;
use Illuminate\Support\Facades\Route;

Route::layout('kompo::app')->group(function(){
	Route::kompo('test/{id}', TestForm::class);
});

Route::get('/', function(){
	dd((new Kompo\Tests\Unit\Interaction\_RunElementClosureFromActionForm())->components);
});