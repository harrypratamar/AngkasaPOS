<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_stock');
		$this->load->model('M_transaksi');
		if(!$this->session->userdata('level')=='Admin'){
			redirect('Auth/login');
		}
		elseif (!$this->session->userdata('level')=='Kasir'){
			redirect('Auth/login');
		}
	}

public function index()
	{	
		//$x['bar']=$this->M_transaksi->tampil_barang();
		if($this->session->userdata('level')=='Admin'){
			$this->template->load('template','transaksi/trans');
		}
		else{
			$this->template->load('template_kasir','transaksi/trans');
		}
	}

public function get_barang(){
		$id_barang =$_GET['id_barang'];
		$sql_barang ="SELECT * FROM `stock` WHERE id_barang= '$id_barang' ";
		$bar=$this->db->query($sql_barang)->row_array();
		$a= array(
			'nama_barang' => $bar['nama_barang'],
			'jml_barang' => $bar['jml_barang'],
			'harga_jual' => $bar['harga_jual'],
			'harga_beli' => $bar['harga_beli'],
		);
		echo json_encode($a);
	}

public function tambah(){
		$nota=$this->input->post('nota');
		$tgl=$this->input->post('tglnota');
		$this->session->set_userdata('nota',$nota);
		$this->session->set_userdata('tglnota',$tgl);
		$idbar=$this->input->post('id_barang');
		$transaksi=$this->M_stock->bar($idbar);
		$i=$transaksi->row_array();
		$a = array(
               'id'       => $i['id_barang'],
               'name'     => $i['nama_barang'],
               'qty'      => $this->input->post('jumlah'),
               'qty1'      => $this->input->post('jumlah'),
               'price'    => $this->input->post('harjual'),
               'harga'    => $this->input->post('harjual'),
            );

		$this->cart->insert($a); 
		redirect('Transaksi');
	}
	
public function simpan_transaksi(){
		$total=$this->input->post('total');
		$jml_uang=$this->input->post('jml_uang');
		$kembalian=$jml_uang-$total;
		if(!empty($total) && !empty($jml_uang)){
			if($jml_uang < $total){
				echo $this->session->set_flashdata('msg','<label class="label label-danger">Jumlah Uang yang anda masukan Kurang</label>');
				redirect('Transaksi');
			}else{
				$notrans=$this->M_transaksi->get_kotrans();
				$this->session->set_userdata('notrans',$notrans);
				$order_proses=$this->M_transaksi->simpan_penjualan($total,$jml_uang,$kembalian,$notrans);
				if($order_proses){
					$this->cart->destroy();
					redirect('Transaksi/cetak');	
				}else{
					redirect('Transaksi');
				}
			}
		}
	}
  
public function remove(){
		$row_id=$this->uri->segment(3);
		$this->cart->update(array(
               'rowid'      => $row_id,
               'qty'     	=> 0
            ));
		redirect('Transaksi');
	}

	public function cetak()
	{
		$x['data']=$this->M_transaksi->cetak_in();
		$this->load->view('c_tr',$x);
	}
}