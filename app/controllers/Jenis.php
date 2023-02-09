<?php

class Jenis extends Controller
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Jenis';
            $data['jenis'] = $this->model("JenisModel")->all();

            $this->view('layouts/dashboard/header', $data);
            $this->view('jenis/index', $data);
            $this->view('layouts/dashboard/footer', $data);
        } else {
            redirect("auth");
        }
    }

    public function create($old_data = '')
    {
        if (isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Tambah Jenis';

            $this->view('layouts/dashboard/header', $data);
            $this->view('jenis/create', $old_data);
            $this->view('layouts/dashboard/footer');
        } else {
            redirect("auth");
        }
    }

    public function store()
    {
        $rules = $this->request('JenisRequest')->rules($_POST['nama_jenis'], $_POST['kode_jenis'], $_POST['keterangan']);

        if ($_POST) {
            if ($rules) {
                if ($this->model("JenisModel")->store($_POST) > 0) {
                    Flasher::setFlash("Data jenis berhasil ditambahkan", "success");
                    redirect("jenis");
                } else {
                    Flasher::setFlash("Data jenis gagal ditambahkan", "danger");
                    $this->create($_POST);
                }
            } else {
                $this->create($_POST);
            }
        } else {
            redirect("jenis");
        }
    }

    public function edit($id)
    {
        if (isset($_SESSION['login'])) {
            $data['title'] = 'Halaman Edit Jenis';
            $data['jenis'] = $this->model("JenisModel")->edit($id);

            $this->view('layouts/dashboard/header', $data);
            $this->view('jenis/edit', $data);
            $this->view('layouts/dashboard/footer');
        } else {
            redirect("auth");
        }
    }

    public function update()
    {
        $rules = $this->request('JenisRequest')->rules($_POST['nama_jenis'], $_POST['kode_jenis'], $_POST['keterangan']);

        if ($_POST) {
            if ($rules) {
                if ($this->model("JenisModel")->update($_POST) > 0) {
                    Flasher::setFlash("Data jenis berhasil diubah", "success");
                    redirect("jenis");
                } else {
                    Flasher::setFlash("Data jenis gagal diubah", "danger");
                    redirect("jenis");
                }
            } else {
                $this->edit($_POST['id_jenis'], $_POST);
            }
        } else {
            redirect("jenis");
        }
    }

    public function destroy($id)
    {
        if ($this->model("JenisModel")->destroy($id) > 0) {
            Flasher::setFlash("Data jenis berhasil dihapus", "success");
        } else {
            Flasher::setFlash("Data jenis gagal dihapus", "danger");
        }
        redirect("jenis");
    }
}
