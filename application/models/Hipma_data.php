<?php 
class Hipma_data extends CI_Model{
    private $table = "tb_listpelma";

    public function getData()
    { 
        return $this->db->get($this->table)->result();
    }

    public function simpan_data($nama, $status, $pt, $jurusan, $email, $region, $tahunmasuk)
    {
        $hasil = $this->db->query("INSERT INTO tb_listpelma (nama, status, pt, jurusan, email, region, tahunmasuk) VALUES ('$nama', '$status', '$pt', '$jurusan', '$email', '$region', '$tahunmasuk')");

        return $hasil;

    }
}
?>