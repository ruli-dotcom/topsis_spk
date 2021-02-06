<div class="box-header">
    <h3 class="box-title">Data Alternatif</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Id Alternatif</th>
<th>Nama Alternatif</th>
<th>coksigen</th>
<th>c/n</th>
<th>n</th>
<th>p2o5</th>
<th>k2o</th>
<th>bobot</th>
<th>Pilihan</th>
</tr>
</thead>
<tbody>
<?php
include ("konfig/koneksi.php");

$s=mysql_query("select * from alternatif order by id_alternatif ASC");
while($d=mysql_fetch_assoc($s)){
?>
<tr>
<td><?php echo $d['id_alternatif']; ?></td>
<td><?php echo $d['nm_alternatif']; ?></td>
<td><?php echo $d['coksigen']; ?></td>
<td><?php echo $d['cn']; ?></td>
<td><?php echo $d['n']; ?></td>
<td><?php echo $d['p2o5']; ?></td>
<td><?php echo $d['k2o']; ?></td>
<td><?php echo $d['bobot']; ?></td>
<td>
<a href="?a=alternatif&k=ubaha&id=<?php echo $d['id_alternatif']; ?>" class="btn btn-warning">Ubah</a>
<a href="hapusalternatif.php?id=<?php echo $d['id_alternatif']; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>