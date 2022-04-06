<?php

namespace App\Controllers;

use Myapp\Settings\Greet;

class Home extends BaseController
{
    public function index()
    {
        $h = new Greet();
        echo $h->hello();
//        return view('welcome_message');
    }
}
