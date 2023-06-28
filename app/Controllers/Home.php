<?php

namespace App\Controllers;
use App\Models;
use App\Models\usuariosRepository;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
}
