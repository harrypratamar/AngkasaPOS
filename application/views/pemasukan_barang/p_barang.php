<section class="content-header">
      <h1>
        Pemasukan Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="<?=site_url('pemasukan_barang')?>"><i class="fa fa-truck"></i>Pemasukan Barang</a></li>
        <li class="active">Memasukkan Barang</li>
      </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Pemasukan Barang</h3>
				</div>
				<div class="box-body">
					<form action="<?=base_url().'Pemasukan_Barang/add_to_cart'?>" method="post">
						<table>
							<tr>
					            <th style="width:100px;padding-bottom:5px;">No Faktur</th>
					            <th style="width:300px;padding-bottom:5px;"><input type="text" name="nofak" value="<?php echo $this->session->userdata('nofak');?>" class="form-control input-sm" style="width:200px;" required></th>
						        <th style="width : 10px"></th>
					        </tr>
					        <tr>
						        <th>Tanggal</th>
						        <th>
						            <div class='input-group date' id='datepicker' style="width:200px;">
						            <input type='text' name="tgl" class="form-control" value="<?php echo $this->session->userdata('tgl');?>" required/>
						            <span class="input-group-addon">
						            <span class="fa fa-calendar"></span>
						            </span>
						          </div>
						        </th>
						    </tr>
						</table>
						<br>

						<table>
					        <tr>
					            <th><small>Kode Barang</small></th>
					        </tr>
					        <tr>
					            <td><input type="text" id="id_barang" name="id_barang"  class="form-control input-sm"></td>                     
					        </tr>
					        <div id="detail_barang" style="position:absolute; size: 10px"></div>
				        </table>
				        <br>
				        <br>
				        <br>
					</form>
					<br>
					
				</div>
			</div>
		</div>
	
	
		<div class="col-md-6">
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title"> Detail Pemasukan Barang</h3>
				</div>
				<br>
				<div class="box-body table-responsive">
					<table class="table table-bordered table-striped">
					<thead style="background-color: #9ee">
						<tr>
			              <th>Kode Barang</th>
			              <th>Nama Barang</th>
			              <th>Jumlah Barang</th>
			              <th>Harga Beli</th>
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
	                         <td ><?php echo number_format($items['price']);?></td>
	                         <td ><?php echo number_format($items['harga']);?></td>
	                         <td ><?php echo number_format($items['subtotal']);?></td>
	                         <td ><a href="<?php echo base_url().'Pemasukan_Barang/remove/'.$items['rowid'];?>" class="btn btn-danger btn-xs"><span class="fa fa-close"></span> Batal</a></td>
	                    </tr>
	                    <?php $i++; ?>
	                    <?php endforeach; ?>
		            </tbody>
		                <tfoot>
		                    <tr>
		                        <td colspan="5" style="text-align:center;">Total</td>
		                        <td colspan="2">Rp. <?php echo number_format($this->cart->total());?></td>
		                    </tr>
		                </tfoot>
		            </table>
		            <br><br>
		            <a href="<?php echo base_url().'Pemasukan_Barang/simpan_pemasukan'?>" class="btn btn-info pull-right"><span class="fa fa-save"></span> Simpan</a>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            //Ajax kabupaten/kota insert
            $("#id_barang").focus();
            $("#id_barang").keyup(function(){
                var idbar = {id_barang:$(this).val()};
                   $.ajax({
               type: "POST",
               url : "<?php echo base_url().'Pemasukan_Barang/get_barang';?>",
               data: idbar,
               success: function(msg){
               $('#detail_barang').html(msg);
               }
            });
            }); 

            $("#id_barang").keypress(function(e){
                if(e.which==13){
                    $("#jumlah").focus();
                }
            });
        });
  </script>
