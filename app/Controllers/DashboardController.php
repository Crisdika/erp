<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use mysql_xdevapi\Session;

class DashboardController extends BaseController
{
    public $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data_user = $this->session->get();
        return view('dashboard' , $data_user);
    }
}
