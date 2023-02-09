<?php

class JenisRequest
{
    public function __construct()
    {
        unset($_SESSION['error']);
    }

    public function rules($nama, $kode_jenis, $keterangan)
    {
        if (!$nama) {
            $_SESSION['error']['nama'] = 'Input nama jenis tidak boleh kosong';
            return false;
        }
        if (!$kode_jenis) {
            $_SESSION['error']['kode_jenis'] = 'Input kode jenis tidak boleh kosong';
            return false;
        }
        if (!$keterangan) {
            $_SESSION['error']['keterangan'] = 'Input keterangan tidak boleh kosong';
            return false;
        }

        return true;
    }
}
