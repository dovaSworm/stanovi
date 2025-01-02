<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;

class ProjektModel extends Model
{

    protected $db;
    protected $builder;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db;
    }

    public function getProjects()
    {
        $query = $this->db->query('SELECT a.*, GROUP_CONCAT(c.ime) slikeList FROM projekt a LEFT JOIN slike b ON a.id = b.proj_id LEFT JOIN slika c ON b.slika_id = c.id GROUP BY a.id');
        // echo (json_encode($query->getResultArray()));
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
