<?php 
class M_datahipma extends CI_Model{
    private $table = "tb_listpelma";

    public function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required'],
            
            ['field' => 'pt',
            'label' => 'PT',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'Jurusan',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'region',
            'label' => 'Region',
            'rules' => 'required'],

            ['field' => 'tahunmasuk',
            'label' => 'Tahun Masuk',
            'rules' => 'required']
        ];
    }

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

    public function get_id($id)
    {
        $query = $this->db->get_where($this->table, array('id' => $id));
        return $query->row();
    }

    public function update_data($id)
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
        
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    public function delete_data($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}
?>