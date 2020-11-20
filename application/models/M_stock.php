<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stock extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('stock');
	}

	public function input_data($data)
	{
		$this->db->insert('stock',$data);
	}

	public function hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function ubah_data($where, $table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function get_barang($idbar){
		$hsl=$this->db->query("SELECT * FROM stock where id_barang='$idbar'");
		return $hsl;
	}
	public function bar($idbar){
		$q=$this->db->query("SELECT * FROM stock where id_barang='$idbar'");
		return $q;
	}
	function simpan_barang($kobar,$nabar,$stok,$harpok,$harjul){
		$hsl=$this->db->query("INSERT INTO stock (id_barang,nama_barang,jml_barang,harga_beli,harga_jual) VALUES ('$kobar','$nabar','$stok','$harpok','$harjul')");
		return $hsl;
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
