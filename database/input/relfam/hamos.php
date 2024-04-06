<?php 
	$id = $_GET['id'];
	mq("DELETE FROM tb_rel_fam WHERE id_rel_fam='$id'");
	alert('hamos', 'relfam', 'relfam');
 ?>
