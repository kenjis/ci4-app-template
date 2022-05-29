<?php

declare(strict_types=1);

namespace App\Controllers;

class Home extends BaseController
{
    public function getIndex(): string
    {
        return view('welcome_message');
    }
}
