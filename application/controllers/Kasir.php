<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {



public function index()
	{
		$this->template->load('template_kasir','dashboard/berandakasir');
	}
}
