<?php
session_start();
include ("konfig/koneksi.php");
echo "<i>cek sessionn dplus</i>";    
echo "<pre>";    
print_r($_SESSION['dplus']);    
echo "</pre>";  


echo "<i>cek sessionn dmin</i>";    
echo "<pre>";    
print_r($_SESSION['dmin']);    
echo "</pre>";  


?>

<div class="box-header">
    <h3 class="box-title " >Nilai Preferensi</h3>
	<p>
    <a style="margin-bottom:10px" href="cetak.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>Cetak Laporan</a>
  </p>
</div>

<table class="table table-bordered table-responsive">
<thead>
<tr>
<th ><center>Nomor</center></th>
<th ><center>Hasil_Preferensi</center></th>
<th ><center>rank<sub>i</sub></center></th>
</tr>

</thead>
<tbody>