<?php 
class Home extends CI_Controller {
    
    public function index()
    {
        $data['judul'] = "- Home";
        
        $this->load->view('templates/v_header', $data);
        $this->load->view('home/v_index');
        $this->load->view('pages/v_modalregis');
        $this->load->view('templates/v_footer');
    }
}
?>