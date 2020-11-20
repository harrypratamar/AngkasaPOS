<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		if($this->session->userdata('level')=="Admin"){

                $this->template->load('template','dashboard/berandaadmin');
            } else {
                $this->template->load('template_kasir','dashboard/berandakasir');
                # code...
            }
		
	}
}
