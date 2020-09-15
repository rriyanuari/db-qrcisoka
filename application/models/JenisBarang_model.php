<?php
class JenisBarang_model extends CI_Model{
  
  public function all(){
    $query = $this->db->select('*')
                      ->get('tbl_jenisbarang');
    return $query;
  }

  public function byNama($nama){
    $query = $this->db->select('*')
                      ->where('nama_jenisBarang', $nama)
                      ->get('tbl_jenisbarang');
    return $query;
  }

  public function create($data){
    $query = $this->db->insert('tbl_jenisbarang',$data);
    return $query;
  }

  public function delete($id){
    $query = $this->db->delete('tbl_jenisBarang', array('id_jenisBarang' => $id));
    return $query;
  }
  
}