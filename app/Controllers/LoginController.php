<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $model = new UsuarioModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('contrasena');

        if (is_string($password) && !is_array($password)) {
            $usuario = $model->where('email', $email)->first();

            if ($usuario && password_verify($password, $usuario['contrasena'])) {
                session()->set(['usuario_id' => $usuario['id'], 'usuario_nombre' => $usuario['nombre']]);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->to('/login')->with('error', 'Credenciales incorrectas');
            }
        } else {
            return redirect()->to('/login')->with('error', 'Credenciales incorrectas');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
