<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_populasaun WHERE id_populasaun='$id'");
	alert('hamos', 'populasaun', 'populasaun');
 ?>
