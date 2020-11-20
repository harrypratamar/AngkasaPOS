<section class="content-header">
      <h1>
        Edit Stock Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?=site_url('stock')?>"><i class="fa fa-folder"> Stock Barang</i></a></li>
        <li class="active">Edit Stock Barang</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Form Edit Stock Barang</h3>
				</div>
				<div class="box-body">
					<?php foreach ($stock as $stock)  { ?>
					<form method="post" action="<?php echo base_url().'Stock/update_data'?>">
					 	<div class="form-group">
							<input type="hidden" name="id_barang" class="form-control" readonly placeholder="ID User" value="<?php echo $stock->id_barang;?>">
						</div>
						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?php echo $stock->nama_barang ;?>">
						</div>
						<div class="form-group">
							<label>Harga Beli</label>
							<input type="text" name="harga_beli" class="form-control" placeholder="Harga Beli" value="<?php echo $stock->harga_beli ;?>">
						</div>
						<div class="form-group">
							<label>Harga Jual</label>
							<input type="text" name="harga_jual" class="form-control" placeholder="Harga Jual" value="<?php echo $stock->harga_jual ;?>">
						</div>
						<button type="submit" name="submit" class="btn btn-success fa fa-refresh">&nbsp UPDATE</button>&nbsp
	                        <?php echo anchor('Stock', '&nbsp KEMBALI', array('class' => "btn btn-danger fa fa-undo")) ?>
					</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>