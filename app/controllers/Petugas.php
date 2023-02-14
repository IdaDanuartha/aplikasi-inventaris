<?php

class Petugas extends Controller
{
    public function index()
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Petugas';
            $data['petugas'] = $this->model("PetugasModel")->all();

            $this->view('layouts/dashboard/header', $data);
            $this->view('petugas/index', $data);
            $this->view('layouts/dashboard/footer', $data);
        } else {
            redirect("auth");
        }
    }

    public function create($old_data = '')
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Tambah Petugas';

            $this->view('layouts/dashboard/header', $data);
            $this->view('petugas/create', $old_data);
            $this->view('layouts/dashboard/footer');
        } else {
            redirect("auth");
        }
    }

    public function store()
    {
        $rules = $this->request('PetugasRequest')->rules($_POST['username'], $_POST['nama_petugas'], $_POST['password']);

        if($_POST) {
            if($rules) {
                if($this->model("PetugasModel")->store($_POST) > 0) {
                    Flasher::setFlash("Data petugas berhasil ditambahkan", "success");
                    redirect("petugas"); 
                } else {
                    Flasher::setFlash("Data petugas gagal ditambahkan", "danger");
                    $this->create($_POST);
                }
            } else {
                $this->create($_POST);
            }
        } else {
            redirect("petugas");
        }
    }

    public function edit($id)
    {
        if(isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Edit Petugas';
            $data['petugas'] = $this->model("PetugasModel")->edit($id);

            $this->view('layouts/dashboard/header', $data);
            $this->view('petugas/edit', $data);
            $this->view('layouts/dashboard/footer');
        } else {
            redirect("auth");
        }  
    }

    public function update()
    {
        $rules = $this->request('PetugasRequest')->rules($_POST['username'], $_POST['nama_petugas'], $_POST['password'], 'edit');

        if($_POST) {
            if($rules) {
                if($this->model("PetugasModel")->update($_POST) > 0) {
                    Flasher::setFlash("Data petugas berhasil diubah", "success");
                    redirect("petugas"); 
                } else {
                    Flasher::setFlash("Data petugas gagal diubah", "danger");
                    $this->edit($_POST['id_petugas'], $_POST);
                }
            } else {
                $this->edit($_POST['id_petugas'], $_POST);
            }
        } else {
            redirect("petugas");
        }
    }

    public function destroy($id)
    {
        if($this->model("PetugasModel")->destroy($id) > 0) {
            Flasher::setFlash("Data petugas berhasil dihapus", "success");
        } else {
            Flasher::setFlash("Data petugas gagal dihapus", "danger");
        }
        redirect("petugas"); 
    }
}
