<?php

class Panel_model extends CI_Model {

    public function index()
    {

    }

    public function get_all($table, $order){
        $result = $this->db->order_by($order,'desc')->get($table)->result();
        return $result;
    }

    public function get($where,$table_name){
        $result = $this->db->where($where)->get($table_name)->row();
        return $result;
    }

    public function getvideourl($where){
        $result = $this->db->where($where)->get('videolar')->row()->video_url;
        return $result;
    }

    public function insert($data,$table_name){
     $insert = $this->db->insert($table_name, $data);
     return $insert;
 }

 public function update($where, $data, $table_name){
    $update = $this->db->where($where)->update($table_name,$data);
    return $update;

}

public function delete($where, $table_name){
    $delete = $this->db->where($where)->delete($table_name);
    return $delete;
}

public function order_by($field= 'id' , $order ='ASC'){
    $result = $this->db->order_by($field, $order)->get('videolar')->result();
    return $result;

}

public function rowcount($table_name){
    $result= $this->db->count_all_results( $table_name);
    return $result;
}
public function rowcountif($where,$table_name){
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

public function selectBoxKategori($id = 0, $x = 0) {
        // tşkler https://github.com/ufukozdemir1990/codeigniter-sinirsiz-kategori
    $query = $this->db->where("ana_kategori_id", $id)->get("kategori")->result();
    if ($query) {
        foreach ($query as $row) {
                    //Buradaki $x değişkeni str_repeat fonksiyonu ile döngü her çalıştığında hiyerarşik bir düzen oluşturur. $x değişkeni her foreach döngüsünde (+2) artar ve ve arttığı kadar
                    //boşluk bırakır.

            echo "<option value=".$row->kategori_id.">".str_repeat("-", $x).$row->kategori_adi."</option>";

                    //Eğer ki $query değişkeni bir sonuç dönderirse foreach içerisinde tekrar tekrar aynı fonksiyonu çalıştırıp alt kategorilerinin olup olmadığına bakarız.
                    //Alt kategori olmadığı durumda if sorgusu çalışmayacağı için döngü sonlanmış olur.
            $this->selectBoxKategori($row->kategori_id, $x + 2);
        }
    }
}


public function KategoriListesi($id = 0) {
    $query = $this->db->where("ana_kategori_id", $id)->get("kategori")->result();
    if ($query) {
        echo "<ul class=\"treeview\">";
        foreach ($query as $row) {
            echo '<li>'.$row->kategori_adi;
            echo '
            <span class="ml-1 mr-1"></span>
            <a class="text-success" href="'.base_url("panel/kategori_form/$row->kategori_id").'" data-toggle="tooltip" data-placement="top" title="Düzelt"><i class="fa fa-edit"></i></a>
            <a class="text-danger delete" href="'.base_url("panel/kategorisil/$row->kategori_id").'" data-title="'.$row->kategori_adi.'" data-toggle="tooltip" data-placement="top" title="Sil"><i class="fa fa-trash"></i></a>
            ';
            $this->KategoriListesi($row->kategori_id);
        }
        echo "</li></ul>";
    }
}
    public function ustkat($id){
    
    $result = $this->db->where('ana_kategori_id',$id)->get('kategori')->row()->kategori_adi;
    return $result;
}

 public function kat($id){
    
    $result = $this->db->where('kategori_id',$id)->get('kategori')->row()->kategori_adi;
    return $result;
}




//class sonuS
}
