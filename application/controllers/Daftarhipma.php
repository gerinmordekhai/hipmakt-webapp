<?php 
class Daftarhipma extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('hipma_data');
        $this->load->library('form_validation');
    }

    public function list()
    {
        $data['judul'] = "- Daftar Hipma";

        $data2['listhipma'] = $this->hipma_data->getData();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/daftarhipma', $data2);
        $this->load->view('pages/modalregis');
        $this->load->view('templates/footer');
    }

    public function tambah_data(){

        $nama = $this->input->post('nama');
        $status = $this->input->post('status');
        $pt = $this->input->post('pt');
        $jurusan = $this->input->post('jurusan');
        $email = $this->input->post('email');
        $region = $this->input->post('region');
        $tahunmasuk = $this->input->post('tahunmasuk');

        $this->hipma_data->simpan_data($nama, $status, $pt, $jurusan, $email, $region, $tahunmasuk);

        redirect('home');
    }
}
?>