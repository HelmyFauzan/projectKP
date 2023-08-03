<?php

class table2model extends CI_Model
{

    function gettable2()
    {
        return $this->db->get('table2');
    }


    function inserttable2()
    {
        $table2 = array(
            "jumlah" => $this->input->post('jumlah'),
            "produk" => $this->input->post('produk'),
            "warna" => $this->input->post('warna'),
            "url" => $this->input->post('url'),
            "harga" => $this->input->post('harga')
        );
        return $this->db->insert('table2', $table2);
    }

    function getTable2ById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get('table2');
    }

    function updatetable2($id)
    {
        $table2 = array(
            "jumlah" => $this->input->post('jumlah'),
            "produk" => $this->input->post('produk'),
            "warna" => $this->input->post('warna'),
            "url" => $this->input->post('url'),
            "harga" => $this->input->post('harga')
        );
        $this->db->where("id", $id);
        return $this->db->update("table2", $table2);
    }

    function deletetable2($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("table2");
    }
}
