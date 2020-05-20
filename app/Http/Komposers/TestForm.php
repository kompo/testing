<?php

namespace App\Http\Komposers;

use Kompo\Columns;
use Kompo\Date;
use Kompo\Form;
use Kompo\Input;
use Kompo\Select;
use App\User;
use Kompo\Trix;

class TestForm extends Form
{
	public $model = User::class;

	protected $metaTags = [
		'title' => 'dsak'
	];

	public function komponents()
	{
		return [
			Columns::form(
				Input::form('Title'),
				Date::form('Published At')
			),
			Select::form('Tags')
		];
	}


	public function newkompos()
	{
		return [
			Trix::form('Content')
		];
	}

}