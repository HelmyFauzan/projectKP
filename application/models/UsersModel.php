<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsersModel extends CI_Model
{

    public function get_all()
    {
        return $this->db->get('user')->result();
    }

    public function create($data)
    {
        return $this->db->insert('user', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}
