<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    // Fungsi CRUD
    // Create
    function input_data($data,$table){
         $this->db->insert($table, $data);
    }
    // Read
    function get_data($table)
    {
        return $this->db->get($table);
    }
    // Read Where
    function get_dataWhere($table,$id){
        return $this->db->get_where($table, array('id' => $id));
    }
    // Update
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }   
    // Delete
    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }
}