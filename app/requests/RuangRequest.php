<?php

class RuangRequest {
    public function __construct()
    {
        unset($_SESSION['error']);
    }

    public function rules($nama, $kode_ruang, $keterangan) 
    {
        if(!$nama) {
            $_SESSION['error']['nama'] = 'Input nama ruang tidak boleh kosong';
            return false;
        }
        if(!$kode_ruang) {
            $_SESSION['error']['kode_ruang'] = 'Input kode ruang tidak boleh kosong';
            return false;
        }
        if(!$keterangan) {
            $_SESSION['error']['keterangan'] = 'Input keterangan tidak boleh kosong';
            return false;
        }

        return true;
    }
}