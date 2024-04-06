<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_literaria WHERE id_literaria='$id'");
	alert('hamos', 'literaria', 'literaria');
 ?>
