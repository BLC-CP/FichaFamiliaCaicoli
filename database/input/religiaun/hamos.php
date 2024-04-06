<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_religiaun WHERE id_religiaun='$id'");
	alert('hamos', 'religiaun', 'religiaun');
 ?>
