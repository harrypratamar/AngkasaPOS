
<?php 
	error_reporting(0);
	$b=$brg->row_array();
?>
<br>
<br>
<br>
	<table>
	<tr>
		<th><small>Nama Barang</small></th>
		<th><small>Harga Pokok</small></th>
		<th><small>Harga Jual</small></th>
		<th><small>Jumlah</small></th>
	</tr>	
	<tr>
		<td><input type="text" name="nabar" value="<?php echo $b['nama_barang'];?>" style="width:170px;margin-right:5px;" class="form-control input-sm" readonly></td>
		<td><input type="text" name="harbeli" value="<?php echo $b['harga_beli'];?>" style="width:80px;margin-right:5px;" class="form-control input-sm" readonly></td>
		<td><input type="text" name="harjual" value="<?php echo $b['harga_jual'];?>" style="width:80px;margin-right:5px;" class="form-control input-sm" required></td>
		<td><input type="number" name="jumlah" id="jumlah" class="form-control input-sm" style="width:50px;margin-right:5px;" required></td>
		<td><button type="submit" class="btn btn-sm btn-info fa fa-plus"></button></td>
	</tr>
	</table>

