<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_profisaun WHERE id_profisaun='$id'");
	alert('hamos', 'profisaun', 'profisaun');
 ?>
