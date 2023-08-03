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
