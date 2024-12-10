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
        // $this->builder = $this->db->table('users');
        $this->builder->where('ime', $name);
        $this->builder->where('sifra', $pass);
        $query = $this->builder->get();
        // echo $query->getRow()->uloga;
        return $query->getRow();
    }
    public function addUser($name, $pass)
    {
        $data = [
            'ime' => $name,
            'sifra' => $pass,
            'uloga' => 'USER',
        ];
        return $this->builder->insert($data);
    }

    public function check_username_exists($username)
    {
        $this->builder->where('ime', $username);
        $query = $this->builder->get();
        if (empty($query->getRow())) {
            return true;
        } else {
            return false;
        }
    }
}
