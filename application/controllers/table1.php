<?php

class table1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("table1model", "", TRUE);
    }


    public function index()
    {
        if ($this->session->userdata('login')) {
            $data['table1'] = $this->table1model->gettable1();
            $this->load->view('table1', $data);
        } else {
            redirect(site_url('home/login'));
        }
    }

    public function tambah()
    {
        $this->load->model("table1model");
        $data['table1'] = $this->table1model->gettable1();
        $this->load->view('tambahtable1', $data);
    }

    public function prosestambah()
    {
        if ($this->table1model->inserttable1()) {
            redirect(site_url('table1'));
        } else {
            redirect(site_url('tambahtable1'));
        }
    }

    public function update($id)
    {
        $this->load->model('table1model');
        $data['table1'] = $this->table1model->gettable1();
        $data['table1'] = $this->table1model->getTable1ById($id)->row();
        $this->load->view("updatetable1", $data);
    }

    public function prosesupdate($id)
    {
        if ($this->table1model->updatetable1($id)) {
            redirect(site_url('table1'));
        } else {
            redirect(site_url('updatetable1'));
        }
    }

    public function delete($id)
    {
        $this->table1model->deleteTable1($id);
        redirect(site_url('table1'));
    }
}
