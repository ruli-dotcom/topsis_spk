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

?>
<div class="box-header">
    <h3 class="box-title">Undang-Undang Pertanian</h3>
</div>


 <form action="" method="POST">
 
 <input type="text" name="id_kriteria" class="form-control" value="<?php echo $IDbaru; ?>" readonly>
 <br />
 <input type="text" name="nama_kriteria" class="form-control"  placeholder="Nama Kriteria" >
 <br />
 <select name="sifat" class="form-control">
	<option value="lebih dari 15">Lebih dari 15</option>
	<option value="kurang dari 25">Kurang dari 25</option>
	<option value="lebih dari 2">Lebih dari 2</option>
	<option value="kurang dari 2">Kurang dari 2</option>
 </select>
 <br />
 <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
 <br />
 </form>

<?php
if(isset($_POST['simpan'])){
	$s=mysql_query("insert into kriteria (id_kriteria,nama_kriteria,sifat) values ('$_POST[id_kriteria]','$_POST[nama_kriteria]','$_POST[sifat]')");
	
	if($s){
		echo "<script>alert('Disimpan'); window.open('index.php?a=kriteria&k=kriteria','_self');</script>";
	}
}

?>

