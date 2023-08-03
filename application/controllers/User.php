<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersModel'); // Load model MahasiswaModel
    }

    public function index()
    {
        $data['user'] = $this->UsersModel->get_all();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function create()
    {
        $json = $this->input->raw_input_stream;
        $data = json_decode($json, true);

        $result = $this->UsersModel->create($data);

        if ($result) {
            $response = array('status' => 'success', 'message' => 'user created successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to create User');
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function update($id)
    {
        $json = $this->input->raw_input_stream;
        $data = json_decode($json, true);

        $result = $this->UsersModel->update($id, $data);

        if ($result) {
            $response = array('status' => 'success', 'message' => 'User updated successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to update User');
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function delete($id)
    {
        $result = $this->UsersModel->delete($id);

        if ($result) {
            $response = array('status' => 'success', 'message' => 'Users deleted successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to delete Users');
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
}
