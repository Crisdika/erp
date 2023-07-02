<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashController extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
}
