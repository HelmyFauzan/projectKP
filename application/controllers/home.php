<?php

class home extends CI_Controller
{

    public function index()
    {

        if ($this->session->userdata('login')) {
            $this->load->view("home");
        } else {
            $this->load->view("login");
        }
    }


    public function home()
    {
        if ($this->session->userdata('login')) {
            $this->load->view("home");
        } else {
            $this->load->view("login");
        }
    }


    public function register()
    {

        $this->load->view('register');
    }

    public function prosesdaftar()
    {
        $this->load->model("UserModel", "", TRUE);
        $user = array(
            "username" => $this->input->post("username"),
            "password" => $this->input->post("password"),
            "name" => $this->input->post("nama")
        );

        if ($this->UserModel->insertUser($user)) {
            redirect(site_url("/register"));
        } else {
            redirect(site_url("home"));
        }
    }

    function login()
    {
        $this->load->model("UserModel");
        if ($this->UserModel->login()->num_rows() > 0) {
            $session_data = array(
                "login" => true,
                "username" => $this->input->post("username"),
                "password" => $this->input->post("password")
            );

            $this->session->set_userdata($session_data);
            redirect(site_url("home"));
        } else {
            $this->session->set_flashdata("error", "Username atau Password Salah");
            redirect(site_url("home"));
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('home'));
    }
}
