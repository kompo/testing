<?php

namespace App\View;

use Kompo\Form;

class KompoForm extends Form
{
	public function komponents()
	{
		return [
			_Input('Write'),
			_Button('Click ehere')->submit()
		];
	}
}