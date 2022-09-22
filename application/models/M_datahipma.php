<?php 
class M_datahipma extends CI_Model{
    private $table = "tb_listpelma";

    public function getData()
    { 
        return $this->db->get($this->table)->result();
    }

    public function simpan_data()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'status' => $this->input->post('status'),
            'pt' => $this->input->post('pt'),
            'jurusan' => $this->input->post('jurusan'),
            'email' => $this->input->post('email'),
            'region' => $this->input->post('region'),
            'tahunmasuk' => $this->input->post('tahunmasuk')
        );

        $this->db->insert($this->table, $data);
    }
}
?>