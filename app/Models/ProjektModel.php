<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;
use App\Models\SlikeModel;

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
        $this->builder = $this->db->table('stan');
        $query = $this->builder->get();
        return $query->getResultArray();
    }
    public function getAllProjects()
    {
        // $query = $this->db->query('SELECT a.*, GROUP_CONCAT(c.ime) slikeList FROM projekt a LEFT JOIN slike b ON a.id = b.proj_id LEFT JOIN slika c ON b.slika_id = c.id GROUP BY a.id');
        $query = $this->db->query('SELECT a.*, GROUP_CONCAT(b.slika) slikeList FROM projekt a LEFT JOIN slike b ON a.id = b.proj_id GROUP BY a.id');
        // echo (json_encode($query->getResultArray()));
        return $query->getResultArray();
    }
    public function getById($id)
    {
        $query = $this->db->query('SELECT a.*, GROUP_CONCAT(b.slika, b.id) slikeList FROM projekt a LEFT JOIN slike b ON a.id = b.proj_id WHERE a.id=' . $id);
        return $query->getRowArray();
    }
    public function modify($proj, $images)
    {
        $imgBuilder = $this->db->table('slike');
        foreach ($images as $image) {
            $img = [
                'slika' => $image,
                'stan_id' => null,
                'proj_id' => $proj['id']
            ];
            $imgBuilder->insert($img);
        }
        $this->builder = $this->db->table('projekt');
        $this->builder->where('id', $proj['id']);
        $this->builder->update($proj);
        $query = $this->builder->get();
        return $query->getRow();
    }
    public function addProject($proj, $images)
    {
        $this->builder = $this->db->table('projekt');
        $this->builder->insert($proj);
        $id = $this->db->insertID();

        $imgBuilder = $this->db->table('slike');
        foreach ($images as $image) {
            $img = [
                'slika' => $image,
                'stan_id' => null,
                'proj_id' => $id
            ];
            $imgBuilder->insert($img);
        }

        $this->builder->where('id', $id);
        $query = $this->builder->get();
        return $query->getRow();
    }
}
