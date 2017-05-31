<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Apliksi Perhitungan Sederhana - GUGEL88.COM</title>
  <link rel="shortcut icon" href="assets/dist/img/icon.png" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini"><b>A</b>PS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Aplikasi</b>PS</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>GUGEL88.COM</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Aplikasi Perhitungan Sederhana
        <small>Versi Beta 0.0.1</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Selamat datang</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <div class="col-md-6">
          	<div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Perhitungan Sederhana</h3>
	            </div>
	            <form role="form" method="post" action="">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="NamaBarang">Nama Barang</label>
	                  <input type="text" class="form-control" id="NamaBarang" name="nama_barang" placeholder="Masukan Nama Barang">
	                </div>
	                <div class="form-group">
	                  <label for="HargaBarang">Harga Barang</label>
	                  <input type="text" class="form-control" id="HargaBarang" name="harga_barang" placeholder="Masukan Harga Barang">
	                </div>
	                <div class="form-group">
	                  <label for="JumlahBarang">Jumlah Barang</label>
	                  <input type="text" class="form-control" id="JumlahBarang" name="jumlah_barang" placeholder="Masukan Jumlah Barang">
	                </div>
	                <div class="form-group">
	                  <label>Barang Diskon</label>
	                  <select class="form-control" name="diskon_barang">
	                    <option>--Pilih--</option>
	                    <option value="Ya" id="diskon_1">Ya</option>
	                    <option value="Tidak" id="diskon_0">Tidak</option>
	                  </select>
	                </div>	                                                
	              	<div class="form-group">
	                	<button type="submit" class="btn btn-primary">Hitung</button> <button type="reset" class="btn btn-danger">Ulangi</button> 
	              	</div>
	              </div>
	            </form>
          	</div>
        </div>

		<?php 
		error_reporting(0);
		$nama_barang = $_POST['nama_barang'];
		$harga_barang = $_POST['harga_barang'];
		$jumlah_barang = $_POST['jumlah_barang'];
		$diskon_barang = $_POST['diskon_barang'];


		/*========= Fungsi Menghitung subtotal =========*/
		$subtotal = $harga_barang * $jumlah_barang ;


		/*========= Menghitung barang berdasarkan diskon ( atau bukan pelanggan). =========*/
		// Keterangan:
		// Jika barang diskon maka akan mendapat potongan harga sebanyak 10%.
		// Jika barang tidak diskon maka tidak mendapat potongan harga. 
		/////////////////////////////////////////////////////////////////////////////////////
		switch ($diskon_barang){
		 case "Ya": 
		  $diskon = $subtotal * 0.1;
		 break; 
		 default: 
		  $diskon = 0; 
		 }


		/*========= Fungsi Menghitung total keseluruhan =========*/
		$total = $subtotal - $diskon;
		?>
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-primary">
	            <div class="box-header with-border">
	              <h3 class="box-title">Hasil Perhitungan Sederhana</h3>
	            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tr>
                  <td>Nama Barang</td>
                  <td><span class="badge bg-red"><?php echo "$nama_barang"; ?></span></td>
                </tr>
                <tr>
                  <td>Harga Barang</td>
                  <td><span class="badge bg-light-blue"><?php echo "Rp. ".number_format($harga_barang); ?></span></td>
                </tr>
                <tr>
                  <td>Jumlah Barang</td>
                  <td><span class="badge bg-red"><?php echo "$jumlah_barang"; ?></span></td>
                </tr>
                <tr>
                  <td>Subtotal</td>
                  <td><span class="badge bg-light-blue"><?php echo "Rp. ".number_format($subtotal); ?></span></td>
                </tr>
                <tr>
                  <td>Diskon Barang</td>
                  <td><span class="badge bg-red"><?php echo "$diskon_barang"; ?></span></td>
                </tr>
                <tr>
                  <td>Jumlah Diskon</td>
                  <td><span class="badge bg-light-blue"><?php echo "Rp. ".number_format($diskon); ?></span></td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td><span class="badge bg-red"><?php echo "Rp. ".number_format($total); ?></span></td>
                </tr>                                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versi</b> Beta 0.0.1
    </div>
    Copyright &copy; 2017 <a href="http://www.gugel88.com/" target="_blank" title="GUGEL88.COM"><strong>GUGEL88.COM</strong></a>
  </footer>


<script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/fastclick/fastclick.js"></script>
<script src="assets/dist/js/app.min.js"></script>
<script src="assets/dist/js/demo.js"></script>
</body>
</html>