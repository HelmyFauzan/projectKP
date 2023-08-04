<?php

class table2 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("table2model", "", TRUE);
    }


    public function index()
    {

        $data['table2'] = $this->table2model->gettable2();
        $this->load->view('table2', $data);
    }

    public function tambah()
    {
        $this->load->model("table2model");
        $data['table2'] = $this->table2model->gettable2();
        $this->load->view('tambahtable2', $data);
        $config['upload_path'] = './asset/image'; 
        $config['allowed_types'] = 'gif|jpg|png'; 
        // $config['max_size'] = 100; 
        // $config['max_width'] = 1024; 
        // $config['max_height'] = 768; 
        $this->load->library('upload', $config); 
        if (!$this->upload->do_upload('gambar')) { 
        echo $this->upload->display_errors(); 
        } else { 
        $upload_data = $this->upload->data(); 
        $user['url'] = base_url("asset/image/").$upload_data['file_name']; 
        } 
    }

    public function prosestambah()
    {
        if ($this->table2model->inserttable2()) {
            redirect(site_url('table2'));
        } else {
            redirect(site_url('tambahtable2'));
        }
    }

    public function update($id)
    {
        $this->load->model('table2model');
        $data['table2'] = $this->table2model->gettable2();
        $data['table2'] = $this->table2model->getTable2ById($id)->row();
        $this->load->view("updatetable2", $data);
    }

    public function prosesupdate($id)
    {
        if ($this->table2model->updatetable2($id)) {
            redirect(site_url('table2'));
        } else {
            redirect(site_url('updatetable2'));
        }
    }

    public function delete($id)
    {
        $this->table2model->deletetable2($id);
        redirect(site_url('table2'));
    }
}
