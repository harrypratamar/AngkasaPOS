<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_transaksi extends CI_Model{


	function simpan_penjualan($total,$jml_uang,$kembalian,$notrans){
		$this->db->query("INSERT INTO transaksi (jual_total,jual_jml_uang,jual_kembalian,jual_kode) VALUES ('$total','$jml_uang','$kembalian','$notrans')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'd_jual_barang_id'			=>	$item['id'],
				'd_jual_barang_nama'		=>	$item['name'],
				'd_jual_harga'				=>	$item['harga'],
				'd_jual_jumlah'				=>	$item['qty'],
				'd_jual_total'				=>	$item['subtotal'],
				'd_jual_kode '				=>	$notrans
			);
			$this->db->insert('detail_penjualan_barang',$data);
			$this->db->query("update stock set jml_barang=jml_barang-'$item[qty]',harga_beli='$item[price]',harga_jual='$item[harga]' where id_barang='$item[id]'");
		}
		return true;
	}
	function get_kotrans(){
		$q = $this->db->query("SELECT MAX(RIGHT(jual_kode,6)) AS kd_max FROM transaksi WHERE DATE(jual_tanggal)");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "TR".date('dmy').$kd;
	}
	function cetak_in(){
		$notrans=$this->session->userdata('notrans');
		$hsl=$this->db->query("SELECT jual_kode,DATE_FORMAT(jual_tanggal,'%d-%m-%y %h:%i:%s') AS jual_tanggal,jual_total,jual_jml_uang,jual_kembalian,d_jual_barang_id,d_jual_barang_nama,d_jual_harga,d_jual_jumlah,d_jual_total FROM transaksi JOIN detail_penjualan_barang ON jual_kode=d_jual_kode WHERE jual_kode='$notrans'");
		return $hsl;
	}
}