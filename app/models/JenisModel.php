<?php

class JenisModel
{
    protected $table = 'jenis',
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
        $this->db->query("INSERT INTO {$this->table} VALUES(null, :nama_jenis, :kode_jenis, :keterangan)");
        $this->db->bind("nama_jenis", $data["nama_jenis"]);
        $this->db->bind("kode_jenis", $data["kode_jenis"]);
        $this->db->bind("keterangan", $data["keterangan"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function edit($id_jenis)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_jenis=:id_jenis");
        $this->db->bind("id_jenis", $id_jenis);

        return $this->db->single();
    }

    public function update($data)
    {
        $this->db->query("UPDATE {$this->table} SET nama_jenis=:nama_jenis, kode_jenis=:kode_jenis, keterangan=:keterangan WHERE id_jenis=:id_jenis");
        $this->db->bind("nama_jenis", $data["nama_jenis"]);
        $this->db->bind("kode_jenis", $data["kode_jenis"]);
        $this->db->bind("keterangan", $data["keterangan"]);
        $this->db->bind("id_jenis", $data["id_jenis"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function destroy($id_jenis)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id_jenis=:id_jenis");
        $this->db->bind("id_jenis", $id_jenis);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
