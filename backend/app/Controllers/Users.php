<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        return view('users/landingPage');
    }
    public function MoodBoard()
    {
        return view('users/MoodBoard');
    }
    public function RoadMap()
    {
        return view('users/RoadMap');
    }
}
