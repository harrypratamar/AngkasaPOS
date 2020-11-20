<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Stock Barang</title>
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
    <section class="invoice">
        <?php
            $b=$data->row_array();
        ?>
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                Laporan Stock Barang
                <address>
                    <br>
                    <strong>ANGKASA</strong><br>
                    Perumahan Karen Indah, Sokaraja<br>
                    Banyumas, Jawa Tengah<br>
                    Phone: 0822-6134-5758
                </address>
            </div>
            <div class="col-sm-4 invoice-col">
                 <div class="col-sm-4 invoice-col">
                
            </div>
            <div class="col-sm-4 invoice-col"></div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga Pokok</th>
                        <th>Harga Jual</th>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($data->result_array() as $i){
                            $no++;
                            $id_barang=$i['id_barang'];
                            $nabar=$i['nama_barang'];
                            $jumlah=$i['jml_barang'];
                            $harbel=$i['harga_beli'];
                            $harjul=$i['harga_jual'];
                            ?>
                        <tr>
                            <td><?=$no;?></td>
                            <td><?=$id_barang;?></td>
                            <td><?=$nabar;?></td>
                            <td><?=$jumlah;?></td>
                            <td><?=number_format($harbel);?></td>
                            <td><?=number_format($harjul);?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
            </div>
        </div>
    </section>
</body>