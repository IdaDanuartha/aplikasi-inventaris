<?php

class Petugas {
    protected $table = 'petugas',
              $db;

    public function __construct()
    {
        $this->db = new Model();
    }
    
    public function getAllPetugas()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->all();
    }
}