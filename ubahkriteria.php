<?php

include ("konfig/koneksi.php");


$query = "SELECT max(id_kriteria) as idMaks FROM kriteria";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$nim = $data['idMaks'];

//mengatur 6 karakter sebagai jumalh karakter yang tetap
//mengatur 3 karakter untuk jumlah karakter yang berubah-ubah
$noUrut = (int) substr($nim, 2, 3);
$noUrut++;

//menjadikan 201353 sebagai 6 karakter yang tetap
$char = "kr";
//%03s untuk mengatur 3 karakter di belakang 201353
$IDbaru = $char . sprintf("%03s", $noUrut);

//ambil data \
$s=mysql_query("select * from kriteria where id_kriteria='$_GET[id]'");
$d=mysql_fetch_assoc($s);


?>
<div class="box-header">
    <h3 class="box-title">Ubah Kriteria</h3>
</div>

<div class="box-body pad">
 <form action="" method="POST">
 
 <input type="text" name="id_kriteria" class="form-control" value="<?php echo $d['id_kriteria']; ?>" readonly>
 <br />
 <input type="text" name="nama_kriteria" class="form-control"  placeholder="Nama Kriteria" value="<?php echo $d['nama_kriteria']; ?>" >
 <br />
 <select name="sifat" class="form-control">
	<option value="lebih dari 15">Lebih dari 15</option>
	<option value="kurang dari 25">Kurang dari 25</option>
	<option value="lebih dari 2">Lebih dari 2</option>
	<option value="kurang dari 2">Kurang dari 2</option>
 </select>
 <br />
 <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
 <br />
 </form>
</div>
<?php
if(isset($_POST['ubah'])){
	$s=mysql_query("update kriteria set nama_kriteria='$_POST[nama_kriteria]',sifat='$_POST[sifat]' where id_kriteria='$_POST[id_kriteria]'");

	if($s){
		echo "<script>alert('Diubah'); window.open('index.php?a=kriteria&k=kriteria','_self');</script>";
	}
}

?>

