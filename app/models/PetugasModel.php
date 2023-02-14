<?php

class PetugasModel {
    protected $table = 'petugas',
              $db;

    public function __construct()
    {
        $this->db = new Model();
    }
    
    public function all()
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_level=2");
        return $this->db->all();
    }

    public function store($data)
    {
        $hash = password_hash($data['password'], PASSWORD_BCRYPT);

        $this->db->query("INSERT INTO {$this->table} VALUES(null, :username, :password, :nama_petugas, :id_level)");
        $this->db->bind("username", $data["username"]);
        $this->db->bind("password", $hash);
        $this->db->bind("nama_petugas", $data["nama_petugas"]);
        $this->db->bind("id_level", 2);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function edit($id_petugas)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_petugas=:id_petugas");
        $this->db->bind("id_petugas", $id_petugas);

        return $this->db->single();
    }

    public function update($data)
    {
        $petugas = $this->edit($data['id_petugas']);
        $hash = password_hash($data['password'], PASSWORD_BCRYPT);

        $this->db->query("UPDATE {$this->table} SET username=:username, password=:password, nama_petugas=:nama_petugas WHERE id_petugas=:id_petugas");
        $this->db->bind("username", $data["username"]);
        $this->db->bind("password", $hash ?? $petugas['password']);
        $this->db->bind("nama_petugas", $data["nama_petugas"]);
        $this->db->bind("id_petugas", $data["id_petugas"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function destroy($id_petugas)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id_petugas=:id_petugas");
        $this->db->bind("id_petugas", $id_petugas);
        $this->db->execute();

        return $this->db->rowCount();
    }
}