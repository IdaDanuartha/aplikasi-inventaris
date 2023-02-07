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

    public function create($old_data = '')
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Tambah Pegawai';

            $this->view('layouts/dashboard/header', $data);
            $this->view('pegawai/create', $old_data);
            $this->view('layouts/dashboard/footer');
        } else {
            redirect("auth");
        }
    }

    public function store()
    {
        $rules = $this->request('PegawaiRequest')->rules($_POST['nama_pegawai'], $_POST['nip'], $_POST['alamat'], $_POST['password']);

        if($_POST) {
            if($rules) {
                if($this->model("PegawaiModel")->store($_POST) > 0) {
                    Flasher::setFlash("Data pegawai berhasil ditambahkan", "success");
                    redirect("pegawai"); 
                } else {
                    Flasher::setFlash("Data pegawai gagal ditambahkan", "danger");
                    $this->create($_POST);
                }
            } else {
                $this->create($_POST);
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
        $rules = $this->request('PegawaiRequest')->rules($_POST['nama_pegawai'], $_POST['nip'], $_POST['alamat'], $_POST['password'], 'edit');

        if($_POST) {
            if($rules) {
                if($this->model("PegawaiModel")->update($_POST) > 0) {
                    Flasher::setFlash("Data pegawai berhasil diubah", "success");
                    redirect("pegawai"); 
                } else {
                    Flasher::setFlash("Data pegawai gagal diubah", "danger");
                    $this->edit($_POST['id_pegawai'], $_POST);
                }
            } else {
                $this->edit($_POST['id_pegawai'], $_POST);
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
