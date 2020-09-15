<?php
class KategoriBarang_model extends CI_Model{
  
  public function all(){
    $query = $this->db->select('*')
                      ->get('tbl_kategoribarang');
    return $query;
  }

  public function byId($id){
    $query = $this->db->select('*')
                      ->where('id_kategoriBarang', $id)
                      ->get('tbl_kategoribarang');
    return $query;
  }
  
}