<?php

class RuangModel {
    protected $table = 'ruang',
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
        $this->db->query("INSERT INTO {$this->table} VALUES(null, :nama_ruang, :kode_ruang, :keterangan)");
        $this->db->bind("nama_ruang", $data["nama_ruang"]);
        $this->db->bind("kode_ruang", $data["kode_ruang"]);
        $this->db->bind("keterangan", $data["keterangan"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function edit($id_ruang)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_ruang=:id_ruang");
        $this->db->bind("id_ruang", $id_ruang);

        return $this->db->single();
    }

    public function update($data)
    {        
        // dd($data['keterangan']);
        $this->db->query("UPDATE {$this->table} SET nama_ruang=:nama_ruang, kode_ruang=:kode_ruang, keterangan=:keterangan WHERE id_ruang=:id_ruang");
        $this->db->bind("nama_ruang", $data["nama_ruang"]);
        $this->db->bind("kode_ruang", $data["kode_ruang"]);
        $this->db->bind("keterangan", $data["keterangan"]);
        $this->db->bind("id_ruang", $data["id_ruang"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function destroy($id_ruang)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE id_ruang=:id_ruang");
        $this->db->bind("id_ruang", $id_ruang);
        $this->db->execute();

        return $this->db->rowCount();
    }
}