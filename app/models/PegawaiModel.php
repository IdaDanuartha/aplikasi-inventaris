<?php

class PegawaiModel {
    protected $table = 'pegawai',
              $db;

    public function __construct()
    {
        $this->db = new Model();
    }
    
    public function all()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->all();
    }

    public function store($data)
    {
        $this->db->query("INSERT INTO {$this->table} VALUES(null, :nama_pegawai, :nip, :alamat)");
        $this->db->bind("nama_pegawai", $data["nama_pegawai"]);
        $this->db->bind("nip", $data["nip"]);
        $this->db->bind("alamat", $data["alamat"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function edit($id_pegawai)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_pegawai=:id_pegawai");
        $this->db->bind("id_pegawai", $id_pegawai);

        return $this->db->single();
    }

    public function update($data)
    {
        $this->db->query("UPDATE {$this->table} SET nama_pegawai=:nama_pegawai, nip=:nip, alamat=:alamat WHERE id_pegawai=:id_pegawai");
        $this->db->bind("nama_pegawai", $data["nama_pegawai"]);
        $this->db->bind("nip", $data["nip"]);
        $this->db->bind("alamat", $data["alamat"]);
        $this->db->bind("id_pegawai", $data["id_pegawai"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function destroy($id_pegawai)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id_pegawai=:id_pegawai");
        $this->db->bind("id_pegawai", $id_pegawai);
        $this->db->execute();

        return $this->db->rowCount();
    }
}