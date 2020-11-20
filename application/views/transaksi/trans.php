<section class="content-header">
      <h1>
        Transaksi
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?=site_url('Transaksi')?>"><i class="fa fa-folder"></i>Transaksi</a></li>
        <li class="active">Transaksi</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Transaksi</h3>
				</div>
				<div class="box-body">
					<form method="post" action="<?=base_url().'Transaksi/tambah'?>">
						<div class="col-md-3 col-xs-3">
							<div class="form-group">
								<label>Kode</label>
								<input type="text" name="id_barang" id="id_barang" onkeyup="isi_otomatis()" class="form-control input-sm" >
							</div>
						</div>
						<div class="col-md-3 col-xs-3">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="name" id="nama_barang" class="form-control input-sm" readonly></div>
						</div>
						<div class="col-md-2 col-xs-3">
							<div class="form-group">
							<label>Harga</label>
							<input type="text" name="harjual" id="harga_jual" class="form-control input-sm" readonly></div>
						</div>
						<div class="col-md-2 col-xs-3">
							<div class="form-group">
							<label>Stock</label>
							<input type="text" name="jumlah" id="jml_barang" class="form-control input-sm" readonly></div>
						</div>
						<div class="col-md-2 col-xs-4">
							<div class="form-group">
							<label>Jumlah</label>
							<input type="number" name="jumlah" id="qty1" value="1" min="1" max="jml_barang" class="form-control input-sm"required=""></div>
						</div>
						<div class="col-md-2 col-xs-3">
							<input type="hidden" name="harbeli" id="harga_beli" class="form-control input-sm" readonly>
						</div>
						<div class="col-md-2 col-xs-3" >
							<div class="form-group">
								<label>masukkan</label>
							<button type="submit" name="submit" class="btn btn-sm btn-primary">Ok</button></div>
						</div>
					</form>
					<br>
					<br>
					<br>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Detail Transaksi</h3>
				</div>
				<div class="box-body table-responsive">
					<table class="table table-bordered table-striped">
						<thead style="background-color: #9ee">
							<tr>
					            <th>Kode Barang</th>
					            <th>Nama Barang</th>
					            <th>Jumlah Barang</th>
					            <th>Harga Jual</th>
					            <th>Sub Total</th>
					            <th>Aksi</th>
				            </tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
			                <?php foreach ($this->cart->contents() as $items): ?>
			                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
			                <tr>
			                	<td><?=$items['id'];?></td>
		                        <td><?=$items['name'];?></td>
		                        <td ><?php echo number_format($items['qty']);?></td>
		                        <td ><?=number_format($items['harga']);?></td>
		                        <td ><?php echo number_format($items['subtotal']);?></td>
		                        <td ><a href="<?php echo base_url().'Transaksi/remove/'.$items['rowid'];?>" class="btn btn-warning btn-xs"><span class="fa fa-close"></span> Batal</a></td>
			                </tr>
			                <?php $i++; ?>
		                    <?php endforeach; ?>
						</tbody>
					</table>
					<br>
					
					<form action="<?php echo base_url().'Transaksi/simpan_transaksi'?>" method="post">
						<table class="pull-right">
							<tr>
								<th>Total (Rp))&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
								<th><input type="text" name="total2" value="<?php echo number_format($this->cart->total());?>" class="form-control input-sm" style="text-align:right;margin-bottom:5px;" readonly></th>
								<input type="hidden" id="total" name="total" value="<?php echo $this->cart->total();?>" class="form-control input-sm" style="text-align: right; margin-bottom: 5px;" readonly>
							</tr>
							<tr>
								<th>Tunai (Rp)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</th>
								<th><input type="text" id="jml_uang" name="jml_uang" class="jml_uang form-control input-sm" style="text-align: right; margin-bottom: 5px;"required></th>
								<input type="hidden" id="jml_uang2" name="jml_uang2" class="form-control input-sm" required>
							</tr>
							<tr>
								<th>Kembalian (Rp) :&nbsp;&nbsp;</th>
								<th><input type="text" id="kembalian" name="kembalian" class="form-control input-sm" style="text-align: right; margin-bottom: 5px;" required readonly></th>
							</tr>
						</table>
						<br>
						<div class="col-md-6">
							<button type="submit" class="btn btn-warning">Bayar</button></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<script type="text/javascript">
	$(function(){
            $('#jml_uang').on("input",function(){
                var total=$('#total').val();
                var jumuang=$('#jml_uang').val();
                var hsl=jumuang.replace(/[^\d]/g,"");
                $('#jml_uang2').val(hsl);
                $('#kembalian').val(hsl-total);
            })
            
        });
</script>
<script type="text/javascript">
	function isi_otomatis(){
		var id_barang = $("#id_barang").val();
		$.ajax({
			url: "<?=base_url().'Transaksi/get_barang'?>",
			type:"GET",
			data:"id_barang=" + id_barang,
			success: function(a){
				var json = a,
				obj = JSON.parse(json);
				$("#nama_barang").val(obj.nama_barang);
				$("#jml_barang").val(obj.jml_barang);
				$("#harga_jual").val(obj.harga_jual);
				$("#harga_beli").val(obj.harga_beli);
			}
		});
	}
</script>