<section class="content-header">
      <h1>
        Stock Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?=site_url('Stock')?>"><i class="fa fa-folder"></i>Stock Barang</a></li>
        <li class="active">Daftar Barang</li>
      </ol>
</section>

<section class="content">
	<div class="row" >
		<div class="col-md-12" >
			<div class="box box-info" >
				<div class="box-header with-border" >
					<h3 class="box-title">Stock Barang</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<?php if($this->session->userdata('level')=="Admin"){ echo ('<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default"> Tambah Stock
					</button>');}else{echo "";}
					?>
					<div class="modal fade" id="modal-default">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="close">
										<span area-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title">Tambahkan Stock</h4>
								</div>
								<div class="modal-body">
									<form  method="post" action="<?php echo base_url().'Stock/tambah_data'?>">
										<div class="form-group">
											<label>Nama Barang</label>
											<input type="text" name="nama_barang" class="form-control" required placeholder="Masukkan Nama Barang">
										</div>
										<div class="form-group">
											<label>Harga Beli</label>
											<input type="text" name="harga_beli" class="form-control" required placeholder="Masukkan Harga Beli">
										</div>
										<div class="form-group">
											<label>Harga Jual</label>
											<input type="text" name="harga_jual" class="form-control" required placeholder="Masukkan Harga Jual">
										</div>
										<br>
										<br>
										<button type="reset" class="btn btn-warning fa fa-rotate-left" data-dismiss="modal"> Reset</button>&nbsp
										<button type="submit" class="btn btn-info fa fa-save"> Simpan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<br><br>
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
			              <thead style="background-color: #9ee">
			                <tr>
			                  <th>No.</th>
			                  <th>Nama Barang</th>
			                  <th>Jumlah Barang</th>
			                  <th>Harga Beli</th>
			                  <th>Harga Jual</th>
			                  <th>Aksi</th>
			                </tr>
			              </thead>
			              <tbody>
			                <?php foreach ($stock as $stock) : ?>
			                <tr>
			                  <td> <?php echo $stock->id_barang ?> </td>
			                  <td> <?php echo $stock->nama_barang ?> </td>
			                  <td> <?php echo $stock->jml_barang ?> </td>
			                  <td> <?php if($this->session->userdata('level')=="Admin"){
			                          echo $stock->harga_beli; 
			                        } else { 
			                          echo "-";
			                        } ?> </td>
			                  <td> <?php echo $stock->harga_jual ?> </td>
			                  <td><?php if($this->session->userdata('level')=="Admin"){ echo anchor('Stock/edit_data/'.$stock->id_barang, '<button type="button" class="fa fa-pencil btn btn-warning">&nbspEdit</button>') ?>&nbsp&nbsp&nbsp&nbsp&nbsp
			                        <?php echo anchor('Stock/hapus_data/'.$stock->id_barang, '<button type="button" class="fa fa-trash btn btn-danger ">&nbspHapus</button>');}else{ echo "-";} ?></td>
			                </tr>
			                <?php endforeach; ?>
			              </tbody>
			            </table>
					</div>
					<a href="<?=base_url('Stock/cetak')?>" target="_blank" class="btn btn-default"><i class="fa fa-print">&nbsp;&nbsp;PRINT</i></a>
				</div>
			</div>
		</div>
	</div>
</section>
  