<?php

class JenisBarang extends CI_Controller {

  private $template = 'templates/dashboard/template_dashboard';

  public function __construct(){

    parent::__construct();    
    
    if($this->session->userdata('logged_in') == FALSE){
      redirect(base_url());
    }

    $this->load->model('JenisBarang_model');
	}

  public function index($page = 'jenisBarang'){

    // Untuk Kategori Berdasarkan ID
    $this->load->model('KategoriBarang_model');

    $data['title'] = 'Jenis Barang';
    $data['page'] = 'jenisBarang';
    $data['status'] = $this->session->userdata('status');
    $data['kontenDinamis'] = $page;

    $data['kategori'] = $this->KategoriBarang_model->all()->result_array();
    $data['tabel'] = $this->JenisBarang_model->all()->result_array();
    
    $this->load->view($this->template, $data);
    $this->load->view('function/swalDefault');
    $this->load->view('function/'.$page);
  }

  public function create(){
    $nama = $this->input->post('nama');
    $data = array(
      'id_kategoriBarang'   => $this->input->post('kategori'),
      'nama_jenisBarang'    => $nama,
      'satuan_jenisBarang'  => $this->input->post('satuan'),
      'nominal_jenisBarang' =>$this->input->post('nominal')
    );

    $cek_nama = $this->JenisBarang_model->byNama($nama)->num_rows();

    if($cek_nama < 1){
      if($this->JenisBarang_model->create($data)){
        echo "success";
      } else{
        echo "error";
      }
    } else{
      echo "error";
    }
  }

  public function delete(){

    $id = $this->input->post('id');

    if($this->JenisBarang_model->delete($id)){
      echo "success";
    } else{
      echo "error";
    }
  }

}