<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_umkn WHERE id_umkn='$id'");
	alert('hamos', 'umkn', 'umkn');
 ?>
