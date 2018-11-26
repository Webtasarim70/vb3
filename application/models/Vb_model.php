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

    public function limitli($table, $where, $order, $how, $start){
        $result = $this->db->limit($how, $start)->where($where)->order_by($order,'desc')->get($table)->result();
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

    public function kategori($id){

        $result = $this->db->where('kategori_id',$id)->get('kategori')->row()->kategori_adi;
        return $result;
    }
    public function kat_id($where){
        $result = $this->db->where($where)->get('kategori')->row()->kategori_id;
        return $result;
    }
    public function rastgele($table, $where, $order){
        $result = $this->db->where($where)->order_by($order,'RANDOM')->get($table)->result();
        return $result;
    }


//class sonu
}
