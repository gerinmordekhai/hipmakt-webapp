<?php 
class Daftarhipma extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_datahipma');
        $this->load->helper('url'); 
    }

    public function list()
    {
        $data['judul'] = "- Daftar Hipma";

        $data2['listhipma'] = $this->M_datahipma->getData();

        $this->load->view('templates/v_header', $data);
        $this->load->view('pages/v_daftarhipma', $data2);
        $this->load->view('pages/v_modalregis');
        $this->load->view('templates/v_footer');
    }

    public function tambah_data(){
        $tambah_hipma = $this->M_datahipma;

        $tambah_hipma->simpan_data();

        redirect('home');
    }
}
?>