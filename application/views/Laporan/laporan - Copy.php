<section class="content-header">
      <h1>
        Laporan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?=site_url('Stock')?>"><i class="fa fa-folder"></i>Laporan</a></li>
        <li class="active">Laporan</li>
      </ol>
</section>

<section class="content">
	<div class="row" >
		<div class="col-md-12" >
			<div class="box box-info" >
				<div class="box-header with-border" >
					<h3 class="box-title" style="font-size: 16px">Laporan Transaksi, Pemasukkan Barang, dan Data Barang</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<div class="box-body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
			              <thead style="background-color: #9ee">
			                <tr>
			                  <th style="width: 40px; text-align: center; ">No.</th>		
			                  <th style="text-align: center; ">Pilih Laporan</th>
			                  <th style="width: 160px; text-align: center; ">Aksi</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr>
			               <tbody>
			                <tr>
			                  <td style="text-align: center;">1</td>
			                  <td>Laporan Stok Barang</td>
			                   <td style="text-align:center;">
                              <a class="btn btn-sm btn-info" href="<?php echo base_url().'laporan/lap_stock_barang'?>" target="_blank"><span class="fa fa-print"></span> Print</a>
			                </tr>
			                <tr>
			                <td style="text-align: center;">2</td>
			                  <td>Laporan Pemasukkan Barang</td>
			                   <td style="text-align:center;">
                              <a class="btn btn-sm btn-info" href="<?php echo base_url().'laporan/lap_data_pemasukan'?>" target="_blank"><span class="fa fa-print"></span> Print</a>
			                </tr>
			                <tr>
			                  <td style="text-align: center;">3</td>
			                  <td>Laporan Pemasukkan Barang PerTanggal</td>
			                   <td style="text-align:center;">
                              <a class="btn btn-sm btn-info" href="#lap_masuk_pertanggal" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
			                </tr>
			                <tr>
			                  <td style="text-align: center;">4</td>
			                  <td>Laporan Pemasukkan Barang PerBulan</td>
			                  <td style="text-align:center;">
                              <a class="btn btn-sm btn-info" href="#lap_masuk_perbulan" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
			                </tr>
			                <tr>
			                  <td style="text-align: center;">5</td>
			                  <td>Laporan Pemasukkan Barang PerTahun</td>
			                   <td style="text-align:center;">
                              <a class="btn btn-sm btn-info" href="#lap_masuk_pertahun" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
			                </tr>
			                <tr>
			                 <td style="text-align: center;">6</td>
			                  <td>Laporan Penjualan</td>
			                   <td style="text-align:center;">
                              <a class="btn btn-sm btn-info" href="<?php echo base_url().'admin/laporan/lap_data_barang'?>" target="_blank"><span class="fa fa-print"></span> Print</a>
			                </tr>
			                <tr>
			                  <td style="text-align: center;">7</td>
			                  <td>Laporan Penjualan PerTanggal</td>
			                   <td style="text-align:center;">
                              <a class="btn btn-sm btn-info" href="<?php echo base_url().'admin/laporan/lap_data_barang'?>" target="_blank"><span class="fa fa-print"></span> Print</a>
			                </tr>
			                <tr>
			                  <td style="text-align: center;">8</td>
			                  <td>Laporan Penjualan PerBulan</td>
			                   <td style="text-align:center;">
                              <a class="btn btn-sm btn-info" href="<?php echo base_url().'admin/laporan/lap_data_barang'?>" target="_blank"><span class="fa fa-print"></span> Print</a>
			                </tr>
			                <tr>
			                  <td style="text-align: center;">9</td>
			                  <td>Laporan Penjualan PerTahun</td>
			                   <td style="text-align:center;">
                              <a class="btn btn-sm btn-info" href="<?php echo base_url().'admin/laporan/lap_data_barang'?>" target="_blank"><span class="fa fa-print"></span> Print</a>
			                </tr>
			              </tbody>
			            </table>
			            	<!-- ============ MODAL ADD =============== -->
				        <div class="modal fade" id="lap_masuk_pertanggal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
				            <div class="modal-dialog">
				            <div class="modal-content">
				            <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				                <h3 class="modal-title" id="myModalLabel">Pilih Tanggal</h3>
				            </div>
				            <form class="form-horizontal" method="post" action="<?php echo base_url().'laporan/lap_pemasukan_pertanggal'?>" target="_blank">
				                <div class="modal-body">

				                    <div class="form-group">
				                        <label class="control-label col-xs-3" >Tanggal</label>
				                        <div class="col-xs-9">
				                            <div class='input-group date' id='datepicker' style="width:300px;">
				                                <input type='text' name="tgl" class="form-control" value="" placeholder="Tanggal..." required/>
				                                <span class="input-group-addon">
				                                    <span class="glyphicon glyphicon-calendar"></span>
				                                </span>
				                            </div>
				                        </div>
				                    </div>
				                           

				                </div>

				                <div class="modal-footer">
				                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
				                    <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
				                </div>
				            </form>
				            </div>
				            </div>
				        </div>
				        <!-- ============ MODAL ADD =============== -->
				        
				        <div class="modal fade" id="lap_masuk_perbulan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
				            <div class="modal-dialog">
				            <div class="modal-content">
				            <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				                <h3 class="modal-title" id="myModalLabel">Pilih Bulan</h3>
				            </div>
				            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/laporan/lap_penjualan_perbulan'?>" target="_blank">
				                <div class="modal-body">

				                    <div class="form-group">
				                        <label class="control-label col-xs-3" >Bulan</label>
				                        <div class="col-xs-9">
				                                <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required/>
				                                <?php foreach ($jual_bln->result_array() as $k) {
				                                    $bln=$k['bulan'];
				                                ?>
				                                    <option><?php echo $bln;?></option>
				                                <?php }?>
				                                </select>
				                        </div>
				                    </div>
				                           

				                </div>

				                <div class="modal-footer">
				                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
				                    <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
				                </div>
				            </form>
				            </div>
				            </div>
				        </div>

				        <!-- ============ MODAL ADD =============== -->
			        <div class="modal fade" id="lap_masuk_pertahun" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			            <div class="modal-dialog">
			            <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			                <h3 class="modal-title" id="myModalLabel">Pilih Tahun</h3>
			            </div>
			            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/laporan/lap_penjualan_pertahun'?>" target="_blank">
			                <div class="modal-body">

			                    <div class="form-group">
			                        <label class="control-label col-xs-3" >Tahun</label>
			                        <div class="col-xs-9">
			                                <select name="thn" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Tahun" data-width="80%" required/>
			                                <?php foreach ($jual_thn->result_array() as $t) {
			                                    $thn=$t['tahun'];
			                                ?>
			                                    <option><?php echo $thn;?></option>
			                                <?php }?>
			                                </select>
			                        </div>
			                    </div>
			                           

			                </div>

			                <div class="modal-footer">
			                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
			                    <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
			                </div>
			            </form>
			            </div>
			            </div>
			        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
  