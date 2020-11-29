<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_transport extends CI_Model
{

    public $table = 'transport';
    public $id = 'id_transport';
    public $no = 'no_kereta';

    public function total_rows()
    {
        $this->db->or_like('nama_kereta');
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from('transport');

        return $this->db->count_all_results();
    }


    function get_limit_data()
    { //membubat seacrh dan pagination
        $this->db->order_by('transport.no_kereta', 'DESC');
        $this->db->or_like('nama_kereta');
        $this->db->distinct();
        $this->db->select("*");
        $this->db->from('transport');
        return $this->db->get()->result();
    }



    function getgapeka($id)
    { //membubat seacrh dan pagination
        $this->db->distinct();
        $this->db->select("no_kereta");
        $this->db->from('transport');
        $this->db->where($this->no, $id);
        return $this->db->get()->row();
    }

    function getallgapeka()
    { //membubat seacrh dan pagination
        $this->db->select("*");
        $this->db->from('transport');
        return $this->db->get()->result();
    }


    function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('transport');
        $this->db->where($this->id, $id);
        return $this->db->get()->row();
    }

    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }


    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }


    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
