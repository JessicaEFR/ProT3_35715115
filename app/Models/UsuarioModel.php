<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'email', 'contrasena'];

    public function getUsuarios()
    {
        return $this->findAll();
    }

    public function getUsuarioById($id)
    {
        return $this->find($id);
    }

    public function createUsuario($data)
    {
        return $this->insert($data);
    }

    public function updateUsuario($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteUsuario($id)
    {
        return $this->delete($id);
    }
}
