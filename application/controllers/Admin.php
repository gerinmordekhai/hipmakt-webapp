<?php 
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_datahipma');
        $this->load->helper('url'); 
    }

    public function data_hipma()
    {
        $data['judul'] = "- Admin Dashboard";
        $data_list['listhipma'] = $this->M_datahipma->getData();

        $this->load->view('templates/v_header', $data);
        $this->load->view('admin/v_dashboard', $data_list);
        $this->load->view('pages/v_modalregis');
        $this->load->view('templates/v_footer');
    }

    public function edit_data($id = null)
    {
        if($_POST == NULL){
            $data_hipma['hipma'] = $this->M_datahipma->get_id($id);
            $data['judul'] = "- Edit Data";

            $this->load->view('templates/v_header', $data);
            $this->load->view('pages/v_formupdate', $data_hipma);
            $this->load->view('templates/v_footer');
        }else{
            $this->M_datahipma->update_data($id);

            redirect('admin');
        }
    }
    
    public function hapus_data($id)
    {
        $this->M_datahipma->delete_data($id);

        redirect('admin');
    }
}
?>