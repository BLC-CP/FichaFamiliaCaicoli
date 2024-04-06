<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_dtl_umkn WHERE id_dtl_umkn='$id'");
	alert('hamos', 'detail', 'detail');
 ?>
