<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Bantuan extends CI_Controller
{
	
	public function index (){
		if ($this->session->userdata('level')=="Admin") {
			$this->template->load('template','Bantuan/admin');
		} else{
			$this->template->load('template_kasir','Bantuan/kasir');
		}
	}
}