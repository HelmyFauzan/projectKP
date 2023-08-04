<?php

class table1model extends CI_Model
{

    function gettable1()
    {
        return $this->db->get('table1');
    }


    function inserttable1()
    {
        $table1 = array(
            "nama" => $this->input->post('nama'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "email" => $this->input->post('email'),
            "no_telp" => $this->input->post('no_telp'),
            "bidang" => $this->input->post('bidang'),
            "alamat" => $this->input->post('alamat')
        );
        return $this->db->insert('table1', $table1);
    }

    function getTable1ById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('table1');
    }

    function updatetable1($id)
    {
        $table1 = array(
            "nama" => $this->input->post('nama'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "email" => $this->input->post('email'),
            "no_telp" => $this->input->post('no_telp'),
            "bidang" => $this->input->post('bidang'),
            "alamat" => $this->input->post('alamat')
        );
        $this->db->where("id", $id);
        return $this->db->update("table1", $table1);
    }

    function deleteTable1($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("table1");
    }
}