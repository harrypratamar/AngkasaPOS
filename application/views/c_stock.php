<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Stock</title>
	<!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<body onload="window.print();">
	<table class="table table-bordered table-striped">
	  <thead style="background-color: #9ee">
	    <tr>
	      <th>No.</th>
	      <th>Nama Barang</th>
	      <th>Jumlah Barang</th>
	      <th>Harga Beli</th>
	      <th>Harga Jual</th>
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
	    </tr>
	    <?php endforeach; ?>
	  </tbody>
	</table>


	<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
	<!-- DataTables -->
	<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</body>
</html>