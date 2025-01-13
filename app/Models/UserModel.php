<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;

class UserModel extends Model
{

    protected $db;
    protected $builder;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function getUserByName($name, $pass)
    {
        $this->builder->where('ime', $name);
        $this->builder->where('sifra', $pass);
        $query = $this->builder->get();
        return $query->getRow();
    }
    public function getById($id)
    {
        $this->builder->where('id', $id);
        $query = $this->builder->get();
        return $query->getRow();
    }
    public function getUsers()
    {
        $query = $this->builder->get();
        return $query->getResultArray();
    }
    public function addUser($user)
    {
        $user['uloga'] = 'USER';
        $this->builder->insert($user);
        $id = $this->db->insertID();
        $this->builder->where('id', $id);
        $query = $this->builder->get();
        return $query->getRow();
    }
    public function modify($user)
    {
        $this->builder->where('id', $user['id']);
        $this->builder->update($user);
        $query = $this->builder->get();
        return $query->getRow();
    }
}
