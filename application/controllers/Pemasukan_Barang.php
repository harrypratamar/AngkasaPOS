<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan_Barang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_stock');
		$this->load->model('M_pemasukan');
	}


public function index()
	{
		$this->template->load('template','pemasukan_barang/p_barang');
	}

public function get_barang(){

		$idbar=$this->input->post('id_barang');
		$x['brg']=$this->M_stock->get_barang($idbar);
		$this->load->view('i_barang',$x);
	}
/*public function get_nama_barang(){

		$nabar=$this->input->post('nama_barang');
		$x['brg']=$this->M_stock->get_barang($nabar);
		$this->load->view('form_pemasukan_barang',$x);
	}*/

public function add_to_cart(){
		$nofak=$this->input->post('nofak');
		$tgl=$this->input->post('tgl');
		$this->session->set_userdata('nofak',$nofak);
		$this->session->set_userdata('tgl',$tgl);
		$idbar=$this->input->post('id_barang');
		$produk=$this->M_stock->get_barang($idbar);
		$i=$produk->row_array();
		$data = array(
               'id'       => $i['id_barang'],
               'name'     => $i['nama_barang'],
               'qty'      => $this->input->post('jumlah'),
               'price'    => $this->input->post('harbeli'),
               'harga'    => $this->input->post('harjual'),
            );

		$this->cart->insert($data); 
		redirect('Pemasukan_Barang');
	}
	
public function simpan_pemasukan(){
		$nofak=$this->session->userdata('nofak');
		$tglfak=$this->session->userdata('tgl');
		if(!empty($nofak) && !empty($tglfak)){
			$beli_kode=$this->M_pemasukan->get_kobel();
			$order_proses=$this->M_pemasukan->simpan_pemasukan($nofak,$tglfak,$beli_kode);
			if($order_proses){
				$this->cart->destroy();
				$this->session->unset_userdata('nofak');
				$this->session->unset_userdata('tgl');
				echo "<script>alert('Data Berhasil ditambahkan slur')
                window.location='".site_url('Pemasukan_Barang')."';
                </script>";
    			} else{echo "<script>alert('sorry Data Gagal di Simpan')
                window.location='".site_url('Pemasukan_Barang')."';
                </script>";}
    		}
    	}
 function remove(){
		$row_id=$this->uri->segment(3);
		$this->cart->update(array(
               'rowid'      => $row_id,
               'qty'     	=> 0
            ));
		redirect('Pemasukan_Barang');
	}
}

