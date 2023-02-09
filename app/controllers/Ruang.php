<?php

class Ruang extends Controller
{
    public function index()
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Ruang';
            $data['ruang'] = $this->model("RuangModel")->all();

            $this->view('layouts/dashboard/header', $data);
            $this->view('ruang/index', $data);
            $this->view('layouts/dashboard/footer', $data);
        } else {
            redirect("auth");
        }
    }

    public function create($old_data = '')
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Tambah Ruang';

            $this->view('layouts/dashboard/header', $data);
            $this->view('ruang/create', $old_data);
            $this->view('layouts/dashboard/footer');
        } else {
            redirect("auth");
        }
    }

    public function store()
    {
        $rules = $this->request('RuangRequest')->rules($_POST['nama_ruang'], $_POST['kode_ruang'], $_POST['keterangan']);

        if($_POST) {
            if($rules) {
                if($this->model("RuangModel")->store($_POST) > 0) {
                    Flasher::setFlash("Data ruang berhasil ditambahkan", "success");
                    redirect("ruang"); 
                } else {
                    Flasher::setFlash("Data ruang gagal ditambahkan", "danger");
                    $this->create($_POST);
                }
            } else {
                $this->create($_POST);
            }
        } else {
            redirect("ruang");
        }
    }

    public function edit($id)
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Edit Ruang';
            $data['ruang'] = $this->model("RuangModel")->edit($id);

            $this->view('layouts/dashboard/header', $data);
            $this->view('ruang/edit', $data);
            $this->view('layouts/dashboard/footer');
        } else {
            redirect("auth");
        }  
    }

    public function update()
    {
        $rules = $this->request('RuangRequest')->rules($_POST['nama_ruang'], $_POST['kode_ruang'], $_POST['keterangan']);

        if($_POST) {
            if($rules) {
                if($this->model("RuangModel")->update($_POST) > 0) {
                    Flasher::setFlash("Data ruang berhasil diubah", "success");
                    redirect("ruang"); 
                } else {
                    Flasher::setFlash("Data ruang gagal diubah", "danger");
                    redirect("ruang");
                }
            } else {
                $this->edit($_POST['id_ruang'], $_POST);
            }
        } else {
            redirect("ruang");
        }
    }

    public function destroy($id)
    {
        if($this->model("RuangModel")->destroy($id) > 0) {
            Flasher::setFlash("Data ruang berhasil dihapus", "success");
        } else {
            Flasher::setFlash("Data ruang gagal dihapus", "danger");
        }
        redirect("ruang"); 
    }
}
