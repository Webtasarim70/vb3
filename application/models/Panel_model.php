<?php

class Panel_model extends CI_Model {

    public function index()
    {
       
    }

  public function get_all(){
        $result = $this->db->order_by('video_id','DESC')->get('videolar')->result();
        return $result;
    }

    public function get($where){
        $result = $this->db->where($where)->get('videolar')->row();
        return $result;
    }

    public function insert($data){
       $insert = $this->db->insert('videolar', $data);
       return $insert;
    }

    public function update($where, $data){
        $update = $this->db->where($where)->update('videolar',$data);
        return $update;

    }

    public function delete($where){
        $delete = $this->db->where($where)->delete('videolar');
        return $delete;
    }

    public function order_by($field= 'id' , $order ='ASC'){
        $result = $this->db->order_by($field, $order)->get('videolar')->result();
        return $result;

    }

    public function rowcount($where, $table_name){
        $result= $this->db->where($where)->count_all_results( $table_name);
        return $result;
    }



}
