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
        $this->builder = $this->db->table('stan');
        $query = $this->builder->get();
        return $query->getResultArray();
    }
    public function getAllStanovi()
    {
        $query = $this->db->query('SELECT a.*, GROUP_CONCAT(b.slika) slika FROM stan a INNER JOIN slike b ON a.id = b.stan_id GROUP BY a.id;');
        return $query->getResultArray();
    }
    public function getById($id)
    {
        $query = $this->db->query('SELECT a.*, GROUP_CONCAT(b.slika, b.id) slikeList FROM stan a LEFT JOIN slike b ON a.id = b.stan_id WHERE a.id=' . $id);
        return $query->getRowArray();
    }
    public function addStan($stan, $image)
    {

        $this->builder = $this->db->table('stan');
        $this->builder->insert($stan);
        $id = $this->db->insertID();

        $imgBuilder = $this->db->table('slike');
        $img = [
            'slika' => $image,
            'stan_id' => $id,
            'proj_id' => null
        ];
        $imgBuilder->insert($img);

        $this->builder->where('id', $id);
        $query = $this->builder->get();
        return $query->getRow();
    }
    public function modify($stan, $image)
    {
        if (!empty($image)) {
            $imgBuilder = $this->db->table('slike');
            $img = [
                'slika' => $image,
                'stan_id' => null,
                'proj_id' => $stan['id']
            ];
            $imgBuilder->insert($img);
        }

        $this->builder = $this->db->table('stan');
        $this->builder->where('id', $stan['id']);
        $this->builder->update($stan);
        $query = $this->builder->get();
        return $query->getRow();
    }
}
