<?php

class Vb_model extends CI_Model {

    public function index()
    {

    }

    public function get_all($table, $order){
        $result = $this->db->order_by($order,'desc')->get($table)->result();
        return $result;
    }

     public function get_where($table, $where, $order){
        $result = $this->db->where($where)->order_by($order,'desc')->get($table)->result();
        return $result;
    }

    public function get_row($where,$table_name){
        $result = $this->db->where($where)->get($table_name)->row();
        return $result;
    }

    public function get($where,$table_name, $cell){
        $result = $this->db->where($where)->get($table_name)->row()->$cell;
        return $result;
    }


//class sonu
}
