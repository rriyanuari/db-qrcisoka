<?php

class Dashboard extends CI_Controller {

  private $template = 'templates/dashboard/template_dashboard';
  
  public function __construct(){    
		parent::__construct();
	}

  public function index($page = 'dashboard'){

    if($this->session->userdata('logged_in') == FALSE){
      redirect(base_url());
    }
    
    $data['title'] = 'Dashboard';
    $data['page'] = 'dashboard';
    $data['kontenDinamis'] = $page;
    
    $this->load->view($this->template, $data);
  }

}