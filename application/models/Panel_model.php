<?php

class Panel_model extends CI_Model {

    public function index()
    {

    }

    public function get_all(){
        $result = $this->db->order_by('video_id','desc')->get('videolar')->result();
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

    public function get_apikey(){
        $result = $this->db->where('ayar_id',1 )->get('ayarlar')->row()->site_apikey;
        return $result;
    }

    public function sef_link($str){
        $preg = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#', '.');
        $match = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp', '');
        $perma = strtolower(str_replace($preg, $match, $str));
        $perma = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $perma);
        $perma = trim(preg_replace('/\s+/', ' ', $perma));
        $perma = str_replace(' ', '-', $perma);
        return $perma;
    }

}
