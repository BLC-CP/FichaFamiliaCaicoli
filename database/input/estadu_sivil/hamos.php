<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_estadu_civil WHERE id_estadu_civil='$id'");
	alert('hamos', 'estadu_sivil', 'estadu_sivil');
 ?>
