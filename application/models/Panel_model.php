<?php

class Panel_model extends CI_Model {

    public function index()
    {

    }

    public function get_all($table, $order){
        $result = $this->db->order_by($order,'desc')->get($table)->result();
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
            <a class="text-success" href="'.base_url("panel/kategoriduzenle/$row->kategori_id").'" data-toggle="tooltip" data-placement="top" title="Düzelt"><i class="fa fa-edit"></i></a>
            <a class="text-danger delete" href="javascript:void(0);" data-link="'.base_url("panel/delete/$row->kategori_id").'" data-title="'.$row->kategori_adi.'" data-toggle="tooltip" data-placement="top" title="Sil"><i class="fa fa-trash"></i></a>
            ';
            $this->KategoriListesi($row->kategori_id);
        }
        echo "</li></ul>";
    }
}



//class sonuS
}
