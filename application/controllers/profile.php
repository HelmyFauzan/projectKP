<?php

class profile extends CI_Controller
{


    public function index()
    {

        if ($this->session->userdata('login')) {
            $this->load->view('profile');
        } else {
            redirect(site_url('home/login'));
        }
    }
}