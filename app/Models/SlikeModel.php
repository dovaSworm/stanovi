<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\RawSql;

class SlikeModel extends Model
{

    protected $db;
    protected $builder;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('slike');
    }
    public function getSlike()
    {
        $query = $this->builder->get();
        return $query->getResultArray();
    }
    public function getById($id)
    {
        $this->builder->where('id', $id);
        $query = $this->builder->get()->getRow();
        return $query->getRow();
    }
    public function deleteSlika($id, $fromwhere)
    {
        $this->builder->where('id', $id);
        $img = $this->builder->get()->getRowArray();
        if (file_exists(ROOTPATH . 'public\slike\\' . $fromwhere . '\\' . $img['slika'])) {
            unlink(ROOTPATH . 'public\slike\\' . $fromwhere . '\\' . $img['slika']);
        }
        $this->builder->where('id', $id)->delete();
    }
    public function modify($img)
    {
        $this->builder->where('id', $img['id']);
        $this->builder->update($img);
        $query = $this->builder->get();
        return $query->getRow();
    }
    public function addSlika($image)
    {
        $this->builder->insert($image);
        $id = $this->db->insertID();
        $this->builder->where('id', $id);
        $query = $this->builder->get();
        return $query->getRow();
    }
}
