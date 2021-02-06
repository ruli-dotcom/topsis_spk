<div class="box-header">
    <h3 class="box-title">Undang-Undang Pertanian</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Id Kriteria</th>
<th>Nama Kriteria</th>
<th>Sifat Kriteria</th>
<th>Pilihan</th>
</tr>
</thead>
<tbody>
<?php
include ("konfig/koneksi.php");

$s=mysql_query("select * from kriteria order by id_kriteria ASC");
while($d=mysql_fetch_assoc($s)){
?>
<tr>
<td><?php echo $d['id_kriteria']; ?></td>
<td><?php echo $d['nama_kriteria']; ?></td>
<td><?php echo $d['sifat']; ?></td>
<td>
<a href="?a=kriteria&k=ubahk&id=<?php echo $d['id_kriteria']; ?>" class="btn btn-warning">Ubah</a>
<a href="hapus.php?id=<?php echo $d['id_kriteria']; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>