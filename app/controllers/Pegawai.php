<?php

class Pegawai extends Controller
{
    public function index()
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Pegawai';
            $data['pegawai'] = $this->model("PegawaiModel")->all();

            $this->view('layouts/dashboard/header', $data);
            $this->view('pegawai/index', $data);
            $this->view('layouts/dashboard/footer', $data);
        } else {
            redirect("auth");
        }  
    }

    public function create()
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Tambah Pegawai';

            $this->view('layouts/dashboard/header', $data);
            $this->view('pegawai/create');
            $this->view('layouts/dashboard/footer');
        } else {
            redirect("auth");
        }  
    }

    public function store()
    {
        if($_POST) {
            if($this->model("PegawaiModel")->store($_POST) > 0) {
                Flasher::setFlash("Data pegawai berhasil ditambahkan", "success");
                redirect("pegawai"); 
            } else {
                Flasher::setFlash("Data pegawai gagal ditambahkan", "danger");
                redirect("pegawai/create"); 
            }
        } else {
            redirect("pegawai");
        }
    }

    public function edit($id)
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Edit Pegawai';
            $data['pegawai'] = $this->model("PegawaiModel")->edit($id);

            $this->view('layouts/dashboard/header', $data);
            $this->view('pegawai/edit', $data);
            $this->view('layouts/dashboard/footer');
        } else {
            redirect("auth");
        }  
    }

    public function update()
    {
        if($_POST) {
            if($this->model("PegawaiModel")->update($_POST) > 0) {
                Flasher::setFlash("Data pegawai berhasil diubah", "success");
                redirect("pegawai"); 
            } else {
                Flasher::setFlash("Data pegawai gagal diubah", "danger");
                redirect("pegawai/edit"); 
            }
        } else {
            redirect("pegawai");
        }
    }

    public function destroy($id)
    {
        if($this->model("PegawaiModel")->destroy($id) > 0) {
            Flasher::setFlash("Data pegawai berhasil dihapus", "success");
        } else {
            Flasher::setFlash("Data pegawai gagal dihapus", "danger");
        }
        redirect("pegawai");
    }
}
