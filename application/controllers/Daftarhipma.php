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
        $data_list['listhipma'] = $this->M_datahipma->getData();

        $this->load->view('templates/v_header', $data);
        $this->load->view('pages/v_daftarhipma', $data_list);
        $this->load->view('pages/v_modalregis');
        $this->load->view('templates/v_footer');
    }

    public function tambah_data()
    {
        $this->M_datahipma->simpan_data();

        redirect('home');
    }

    public function edit_data($id = null)
    {
        if($_POST == NULL){
            $data_hipma['hipma'] = $this->M_datahipma->get_id($id);
            $data['judul'] = "- Edit Hipma";

            $this->load->view('templates/v_header', $data);
            $this->load->view('pages/v_formupdate', $data_hipma);
            $this->load->view('templates/v_footer');
        }else{
            $this->M_datahipma->update_data($id);

            redirect('daftarhipma');
        }
    }
    
}
?>