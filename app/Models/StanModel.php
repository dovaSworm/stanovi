<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;

class StanModel extends Model
{

    protected $db;
    protected $builder;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db;
    }

    public function getStanovi()
    {
        // $query = $this->db->query('SELECT stan.* FROM stan');
        $query = $this->db->query('SELECT a.*, GROUP_CONCAT(c.ime) ime FROM stan a INNER JOIN slike b ON a.id = b.stan_id INNER JOIN slika c ON b.slika_id = c.id GROUP BY a.id;');
        // $this->builder = $this->db->table('users');
        // $query = $this->builder->get();
        // echo $query->getRow()->uloga;
        return $query->getResultArray();
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
}
