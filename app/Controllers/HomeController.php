<?php

namespace App\Controllers;

use App\Models\HomeModels; 

class HomeController extends BaseController
{
    protected $homeModels; 

    public function index()
    {
        return view('home/index');
    }
}
