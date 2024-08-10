<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        if (!session()->has('user_id')) {
            return redirect()->to(base_url('login'));
        }

        $data = [
            'user_name' => session()->get('user_name'),
            'user_surname' => session()->get('user_surname')
        ];

        return view('user_view', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
