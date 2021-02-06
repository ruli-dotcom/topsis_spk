<h1>Hasil Topsis</h1>
<ul class="nav nav-tabs">
  <?php
  if($_GET['k']=='nilai_matriks'){
	$act1='class="active"';
	$act2='';
	$act3='';
	$act4='';
	$act5='';
	$act6='';
  }else if($_GET['k']=='nilai_preferensi'){
	$act1='';
	$act2='';
	$act3='';
	$act4='';
	$act5='';
	$act6='class="active"';
}else if(@$_GET['a']=='ranking'){
	$active1='';
	$active2='class="active"';
	$active3='';
	$active4='';
  }else{
	$act1='';
	$act2='';
	$act3='';
	$act4='';
	$act5='';
	$act6='';
  }
  ?>
  <li <?php echo $act2; ?>><a href="index.php?a=hasiltopsis&k=nilai_preferensi">Nilai Preferensi</a></li>

  <li <?php echo $act3; ?>><a href="index.php?a=hasiltopsis&k=ranking">ranking</a></li>

  
  
</ul>

<?php

if(@$_GET['a']=='hasiltopsis' and @$_GET['k']=='preferensi'){
	include ("preferensi.php");
 }else if(@$_GET['k']=='ranking'){
	include ("rangking.php");
 }
 ?>
