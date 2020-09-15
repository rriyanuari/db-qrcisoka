<?php

class User extends CI_Controller {

	public function __construct(){
		/* kalau mau bikin konstruktor di Codeigniter maka harus taro script
		   dibawah ini supaya tidak menpimpa controller CI */
		parent::__construct();

		/* load helper / library hanya untuk class User
		   kalau helper / library sering dipakai di berbagai class, langsung load di config/autoload.php */
		// $this->load->helper('form');

		//model user
		$this->load->model('User_model');
		
	}

    public function login($page = 'login'){

      if($this->session->userdata('logged_in')){
        redirect('dashboard');
      }

        $data['title'] = 'Login';

      $this->load->view('pages/'.$page, $data);
      $this->load->view('function/swalDefault');
      $this->load->view('function/'.$page);
    }

    public function prosesLogin(){      

      $username = $this->input->post('user');
      $password = $this->input->post('pass');
      $password = md5($password);

      $user = $this->User_model->login($username, $password);
      if(!empty($user)){
        $session_data = array(
            'id_user'   => $user->id_user,
            'username'  => $user->username,
            'status'    => $user->status,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($session_data);
        echo "success";
      } else{
        echo "error";
      }
    }

    public function logout(){
    	$this->session->sess_destroy();
      redirect(base_url());
    }


}