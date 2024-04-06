	<style>
		table {
			border-collapse: collapse;
			margin: 2px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}
		h2{color:blue;
			margin:-4px;
		}

		img#imagens{
			width: 15%;
			margin-left: 60vh;
			margin-bottom: 5px;
			position: relative;
/*			position: absolute;*/
}
</style>
<!-- <img id="imagens" src="../logo/R.png"> -->
<h2 style="text-align:center; font-size: 35px;">Republica Democratica de Timor Leste</h2>
<h4 style="text-align:center; ">RELATORIU DADUS UMA KAIN SUKU CAICOLI</h4>
<hr>
<script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
</script>	


<?php 

// $a=$conn->query("SELECT * FROM tb_dtl_umkn");	
// $rufs=$a->fetch_array();

// $drufs =  $rufs['id_umkn'];
?>