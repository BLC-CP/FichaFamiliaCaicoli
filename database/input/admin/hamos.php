<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_admin WHERE id_admin='$id'");
	alert('hamos', 'admin', 'admin');
 ?>
