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
    public function SignUp()
    {
        return view('users/SignUp');
    }
    public function Login()
    {
        return view('users/Login');
    }
    public function DashboardAdminPage()
    {
        return view('users/DashboardAdminPage');
    }
    public function ServicePage()
    {
        return view('users/ServicePage');
    }
    public function AccountPage()
    {
        return view('users/AccountPage');
    }
}
