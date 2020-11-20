<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
		if(!$this->session->userdata('level')=='Admin'){
			redirect('Auth/login');
		}
		elseif (!$this->session->userdata('level')=='Kasir'){
			redirect('Auth/login');
		}

    }
	public function index()
	{
		
		$data['stock'] = $this->M_stock->tampil_data()->result();
		if($this->session->userdata('level')=="Admin"){

                $this->template->load('template','stock/stock',$data);
            } else {
                $this->template->load('template_kasir','stock/stock',$data);
                # code...
            }
	}

public function tambah_data()
	{
		$nama_barang = $this->input->post('nama_barang');
		//$jml_barang  = $this->input->post('jml_barang');
		$harga_beli  = $this->input->post('harga_beli');
		$harga_jual  = $this->input->post('harga_jual');

		$data = array(
			'nama_barang' => $nama_barang,
			//'jml_barang'  => $jml_barang,
			'harga_beli'  => $harga_beli,
			'harga_jual'  => $harga_jual 
		);

		$this->M_stock->input_data($data, 'stock');
		redirect('Stock/index');
	}	

public function hapus_data($id_barang)
	{
		$where = array ('id_barang' => $id_barang);
		$this->M_stock->hapus($where, 'stock');
			redirect('Stock/index');
	}

public function edit_data($id_barang)
	{

		$where = array ('id_barang' => $id_barang);
		$data['stock'] = $this->M_stock->ubah_data($where, 'stock')->result();
		$this->template->load('template','stock/edit',$data);
	}
public function update_data()
	{
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		//$jml_barang  = $this->input->post('jml_barang');
		$harga_beli  = $this->input->post('harga_beli');
		$harga_jual  = $this->input->post('harga_jual');

		$data = array(
			'nama_barang' => $nama_barang,
			//'jml_barang' => $jml_barang,
			'harga_beli' => $harga_beli,
			'harga_jual' => $harga_jual, );

		$where = array('id_barang' => $id_barang);

		$this->M_stock->update($where, $data, 'stock');
		redirect('Stock/index');
	}
	public function cetak()
	{
		$data['stock'] = $this->M_stock->tampil_data()->result();
		$this->load->view('c_stock',$data);
	}

/*public function pdf()
	{
		
		$data= array(
			'nama_barang' => $nama_barang,
			'jml_barang'=> $jml_barang,
			'harga_beli'=> $harga_beli,
			'harga_jual'=> $harga_jual,);
		$this->load->library('PdfGenerator');
		$html = $this->load->view('c_stock',$data,true);
		$this->PdfGenerator->generate($html, '');
	}*/

}