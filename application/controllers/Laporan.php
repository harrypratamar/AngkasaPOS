<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Laporan extends CI_Controller
{	function __construct(){
	parent::__construct();
	$this->load->model('M_stock');
	


}
function index(){

if ($this->session->userdata('level')=="Admin") {
		$data['data']=$this->M_stock->tampil_data();
		$data['jual_bln']=$this->M_laporan->get_masuk_perbulan();
		
			$this->template->load('template','Laporan/laporan');
		} else{
			$this->template->load('template_kasir','Laporan/laporan');
		}
	}
	

function lap_stok_barang(){
		$x['data']=$this->m_laporan->get_stok_barang();
		$this->load->view('admin/laporan/v_lap_stok_barang',$x);
	}

	function lap_penjualan_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->m_laporan->get_masuk_perbulan($bulan);
		$x['data']=$this->m_laporan->get_masuk_perbulan($bulan);
		$this->load->view('admin/laporan/v_lap_jual_perbulan',$x);
	}
	
	}