<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_pemasukan extends CI_Model{
	function simpan_pemasukan($nofak,$tglfak,$beli_kode){
		$this->db->query("INSERT INTO pemasukan_barang (p_barang_nofak,p_barang_tanggal,p_barang_kode) VALUES ('$nofak','$tglfak','$beli_kode')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'd_pemasukan_nofak' 		=>	$nofak,
				'd_pemasukan_id_barang'		=>	$item['id'],
				'd_pemasukan_harga '		=>	$item['price'],
				'd_pemasukan_jumlah'		=>	$item['qty'],
				'd_pemasukan_total'			=>	$item['subtotal'],
				'd_pemasukan_kode '			=>	$beli_kode
			);
			$this->db->insert('detail_pemasukan_barang',$data);
			$this->db->query("update stock set jml_barang=jml_barang+'$item[qty]',harga_beli='$item[price]',harga_jual='$item[harga]' where id_barang='$item[id]'");
		}
		return true;
	}
	function get_kobel(){
		$q = $this->db->query("SELECT MAX(RIGHT(p_barang_kode,6)) AS kd_max FROM pemasukan_barang WHERE DATE(p_barang_tanggal)");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "BL".date('dmy').$kd;
	}
}