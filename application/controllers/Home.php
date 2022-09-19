<?php 
class Home extends CI_Controller {
    
    public function index()
    {
        $data['judul'] = "- Home";
        
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('pages/modalregis');
        $this->load->view('templates/footer');
    }

    public function registrasi()
    {
        
    }
}
?>