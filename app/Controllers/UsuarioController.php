<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class UsuarioController extends Controller
{
    public function index()
    {
        $model = new UsuarioModel();
        $data['usuarios'] = $model->getUsuarios();
        return view('usuarios/index', $data);
    }

    public function create()
    {
        return view('usuarios/create');
    }

    public function store()
    {
        $model = new UsuarioModel();
        
        $nombre = $this->request->getPost('nombre');
        $email = $this->request->getPost('email');
        $contrasena = $this->request->getPost('contrasena');

        if (is_string($contrasena) && !is_array($contrasena)) {
            $model->save([
                'nombre' => $nombre,
                'email' => $email,
                'contrasena' => password_hash($contrasena, PASSWORD_DEFAULT),
            ]);
            return redirect()->to('/usuarios');
        } else {
            return redirect()->back()->with('error', 'Contraseña no válida');
        }
    }

    public function edit($id)
    {
        $model = new UsuarioModel();
        $data['usuario'] = $model->getUsuarioById($id);
        return view('usuarios/edit', $data);
    }

    public function update($id)
    {
        $model = new UsuarioModel();

        $nombre = $this->request->getPost('nombre');
        $email = $this->request->getPost('email');
        $contrasena = $this->request->getPost('contrasena');

        if (is_string($contrasena) && !is_array($contrasena)) {
            $hashedContrasena = password_hash($contrasena, PASSWORD_DEFAULT);
        } else {
            $hashedContrasena = null;
        }

        $data = [
            'nombre' => $nombre,
            'email' => $email,
        ];

        if ($hashedContrasena) {
            $data['contrasena'] = $hashedContrasena;
        }

        $model->update($id, $data);

        return redirect()->to('/usuarios');
    }

    public function delete($id)
    {
        $model = new UsuarioModel();
        $model->deleteUsuario($id);
        return redirect()->to('/usuarios');
    }
}
