<?php

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_logs');
        
    }
   public function index() {
        $this->load->view('login');
        
   }
   public function login(){

		$user=$this->input->post('username');
        $pass=$this->input->post('password');

        $ceklogin=$this->M_logs->chek_login($user,$pass);

        if($ceklogin){
            foreach ($ceklogin as $row); 
            $this->session->set_userdata('username',$row->username);
            $this->session->set_userdata('level',$row->level);
            
            if($this->session->userdata('level')=="Admin"){

                redirect('Admin');
            }elseif ($this->session->userdata('level')=="Kasir") {
                redirect('Kasir');
                # code...
            }
	        }
           	else{
                echo "<script>alert('Login Gagal, Username/Password salah')
                window.location='".site_url('Auth/index')."';
                </script>";
            }
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}

}
