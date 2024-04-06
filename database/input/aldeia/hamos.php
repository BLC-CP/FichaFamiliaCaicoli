<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_aldeia WHERE id_aldeia='$id'");
	alert('hamos', 'aldeia', 'aldeia');
 ?>
