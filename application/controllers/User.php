<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');

    }

	public function index()
	{
		
		$data['user'] = $this->M_user->tampil_data()->result();
		$this->template->load('template','user/list',$data);
		
	}
    
    public function tambah_data()
	{
		$username 	= $this->input->post('username');
		$password  	= $this->input->post('password');
		$level	    = $this->input->post('level');
		$nama       = $this->input->post('nama');

		$data = array(
			'username   ' => $username,
			'password  '  => $password,
			'level'  	  => $level,
			'nama'  	  => $nama 
		);

		$this->M_user->input_data($data, 'user');
		redirect('User/index');
	}	

public function hapus_data($id_user)
	{
		$where = array ('id_user' => $id_user);
		$this->M_user->hapus($where, 'user');
			redirect('User/index');
	}

public function edit_data($id_user)
	{

		$where = array ('id_user' => $id_user);
		$data['user'] = $this->M_user->ubah_data($where, 'user')->result();
		$this->template->load('template','user/edit',$data);
	}
public function update_data()
	{
		$id_user	 = $this->input->post('id_user');
		$username    = $this->input->post('username');
		$password    = $this->input->post('password');
		$level	     = $this->input->post('level');
		$nama        = $this->input->post('nama');

		$data = array(
			'username  ' => $username,
			'password  ' => $password,
			'level' 	 => $level,
			'nama      ' => $nama,);

		$where = array('id_user' => $id_user);

		$this->M_user->update($where, $data, 'user');
		redirect('User/index');
	}
}