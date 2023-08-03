<?php

class aboutus extends CI_Controller
{


    public function index()
    {

        if ($this->session->userdata('login')) {
            $this->load->view('aboutus');
        } else {
            redirect(site_url('home/login'));
        }
    }
}
