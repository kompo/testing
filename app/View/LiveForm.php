<?php

namespace App\View;

use Ko\Form;

class LiveForm extends Form
{
	public $count = 0;

    public function increment()
    {
        $this->count++;

        dd($this);
    }

	public function el()
	{
		return [
			new KompoForm()
		];
	}


}