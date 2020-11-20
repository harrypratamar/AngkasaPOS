<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Pemasukan Barang</title>
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
                <?php 
                    $b=$data->row_array();
                ?>
                <td>Laporan Pemasukan Barang Tanggal <b><?php echo ($b['p_barang_tanggal']);?></b></td>
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
                        <th>Kode Transaksi</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>total</th>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($data->result_array() as $i){
                            $no++;
                            $kode=$i['d_pemasukan_kode'];
                            $tanggal=$i['p_barang_tanggal'];
                            $nabar=$i['d_pemasukan_barang_nama'];
                            $jumlah=$i['d_pemasukan_jumlah'];
                            $harga=$i['d_pemasukan_harga'];
                            $total=$i['d_pemasukan_total'];
                            ?>
                        <tr>
                            <td><?=$no;?></td>
                            <td><?=$kode;?></td>
                            <td><?=$tanggal;?></td>
                            <td><?=$nabar;?></td>
                            <td><?=$jumlah;?></td>
                            <td>Rp. <?=number_format($harga);?></td>
                            <td>Rp. <?=number_format($total);?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                    <tfoot>
                    <?php 
                        $b=$jml->row_array();
                    ?>
                        <tr>
                            <td colspan="5" style="text-align:center;"><b>Total Keseluruhan</b></td>
                            <td style="text-align:right;"><b><?php echo 'Rp '.number_format($b['total']);?></b></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
            </div>
        </div>
    </section>
</body>