<?php
class Model_diagnosa extends CI_model
{
    // Mengosongkan tabel tmp_gejala sebelum digunakan
    public function kosongTmpGejala()
    {
        return $this->db->truncate('tmp_gejala');
    }

    // mengosongkan tabel tmp_final sebelum digunakan
    public function kosongTmpFinal()
    {
        return  $this->db->truncate('tmp_final');
    }
}
