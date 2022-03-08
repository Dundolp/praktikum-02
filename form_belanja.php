<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body >
<div class="d-flex justify-content-between border-bottom">
<div class="">
<h3 class ="border-bottom">Belanja Online</h3>
<form method="post" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label text-right">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 text-right">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">Tv</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesinCuci" required="required"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label text-right">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value = "Kirim" name="proses" class="btn btn-primary">
 
    </div>
  </div>
</form>
</div>
<ul class="list-group ">
  <li class="list-group-item bg-primary text-light">Daftar Harga</li>
  <li class="list-group-item">TV : 4.200.000</li>
  <li class="list-group-item">Kulkas : 3.100.000</li>
  <li class="list-group-item">Mesin Cuci : 3.800.00</li>
  <li class="list-group-item bg-primary text-light" >Harga Dapat Berubah Setiap Saat </li>
</ul>
</div>

<!-- php script -->
<?php 
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if ($produk == 'tv') {
  echo 'Nama Customer : '. $customer;
  echo '<br>Produk Pilihan : '. $produk;
  echo '<br>Jumlah Beli : '. $jumlah;
  echo '<br>Total Belanja : '. $jumlah * 4200000;

} elseif ($produk == 'kulkas') {
  echo 'Nama Customer : '. $customer;
  echo '<br>Produk Pilihan : '. $produk;
  echo '<br>Jumlah Beli : '. $jumlah;
  echo '<br>Total Belanja : '. $jumlah * 3100000;

} else {
  echo 'Nama Customer : '. $customer;
  echo '<br>Produk Pilihan : '. $produk;
  echo '<br>Jumlah Beli : '. $jumlah;
  echo '<br>Total Belanja : '. $jumlah * 3800000;

}
?>
</body>
</html>