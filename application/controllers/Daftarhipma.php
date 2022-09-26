<?php 
class Daftarhipma extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_datahipma');
        $this->load->helper('url'); 
        $this->load->library('session', 'form_validation');
    }

    public function list()
    {
        $data['judul'] = "- Daftar Hipma";
        $data_list['listhipma'] = $this->M_datahipma->getData();

        $this->load->view('templates/v_header', $data);
        $this->load->view('pages/v_daftarhipma', $data_list);
        $this->load->view('pages/v_modalregis');
        $this->load->view('templates/v_footer');
    }

    public function tambah_data()
    {
        $this->form_validation->set_rules($this->M_datahipma->rules());

        if($this->form_validation->run()){
            $this->M_datahipma->simpan_data();
        }
        
        redirect('home');
    }

    
}
?>