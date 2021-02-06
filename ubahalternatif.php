<?php

include ("konfig/koneksi.php");
$s=mysql_query("select * from alternatif where id_alternatif='$_GET[id]'");
$d=mysql_fetch_assoc($s);
?>
<div class="box-header">
    <h3 class="box-title">Ubah Alternatif</h3>
</div>

<div class="box-body pad">
 <form action="" method="POST">
 
 <input type="text" name="id_alternatif" class="form-control" value="<?php echo $d['id_alternatif']; ?>" readonly>
 <br />
 <input type="text" name="nama_alternatif" class="form-control"  placeholder="Nama Alternatif" value="<?php echo $d['nm_alternatif']; ?>">
 <br />
 <input type="text" name="coksigen" class="form-control"  placeholder="C-Oksigen" value="<?php echo $d['coksigen']; ?>">
 <br />
 <input type="text" name="cn" class="form-control"  placeholder="C/N" value="<?php echo $d['cn']; ?>">
 <br />
 <input type="text" name="n" class="form-control"  placeholder="N" value="<?php echo $d['n']; ?>">
 <br />
 <input type="text" name="p2o5" class="form-control"  placeholder="P2O5" value="<?php echo $d['p2o5']; ?>">
 <br />
 <input type="text" name="k2o" class="form-control"  placeholder="K2O" value="<?php echo $d['k2o']; ?>">
 <br />
 <select name="bobot" class="form-control">
	<option value="rendah">rendah</option>
	<option value="cukup">cukup</option>
	<option value="tinggi">tinggi</option>
	<option value="sangat tinggi">sangat tinggi</option>
 </select>
 <input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
 <br />
 </form>
</div>
<?php
if(isset($_POST['ubah'])){
	$s=mysql_query("insert into alternatif (id_alternatif,nm_alternatif,corganik,cn,n,p2o5,k2o,bobot) values('$_POST[id_alternatif]','$_POST[nama_alternatif]','$_POST[coksigen]','$_POST[cn]','$_POST[n]','$_POST[p2o5]','$_POST[k2o]','$_POST[bobot]')");
	
	if($s){
		echo "<script>alert('Diubah'); window.open('index.php?a=alternatif&k=alternatif','_self');</script>";
	}
}

?>

