	<?php

	$conn = new mysqli("localhost","root","","ililai");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	?> 
	<button class="btn" onclick="printContent('div1')">EMPRIME</button>
	<hr>
	<div id="div1">
		<?php include'header.php'; ?>
		<table width="100%" border="1">

			<tbody>
				<tr>

					<td class="text-center">
						RELATORIU DADUS UMA KAIN SUKU CAICOLI
					</td>

				</tr>
			</tbody>

		</table>
		<HR>
		<?php
		$a=$conn->query("SELECT * FROM tb_umkn, tb_populasaun, tb_aldeia, tb_profisaun, tb_religiaun, tb_estadu_civil, tb_rel_fam, tb_literaria WHERE 

			tb_umkn.id_populasaun=tb_populasaun.id_populasaun AND
			tb_populasaun.id_aldeia=tb_aldeia.id_aldeia AND
			tb_populasaun.id_profisaun=tb_profisaun.id_profisaun AND
			tb_populasaun.id_religiaun=tb_religiaun.id_religiaun AND
			tb_populasaun.id_estadu_civil=tb_estadu_civil.id_estadu_civil AND
			tb_populasaun.id_rel_fam=tb_rel_fam.id_rel_fam AND 
			tb_populasaun.id_literaria=tb_literaria.id_literaria 

			");	
		$no = 1;
		while($r=$a->fetch_array()){

			$idum = $r['id_umkn'];

			?>
			<table width="100%" border="1">
			<!-- <div class="row">
				<div class="col-3">Muisipiu : Lautem</div>
				<div class="col-3">Postu Admininstrativu : Lautem</div>
				<div class="col-3">Suku : Ililai</div>
				<div class="col-3">Aldeia : Ililai</div>
			</div> -->

			<div class="row  ">
				<div class="col-12">
					<div class="left">
						<p style="width: 250px";>Munisipiu : <b>Dili</b></p>   
						<p style="width: 250px";>Postu Administrativu : <b>Vera-Cruz</b></p> 
						<p style="width: 250px";>Suku : <b>Caicoli</b></p> 
						<p style="width: 250px";>Aldeia : <b><?= $r['nrn_aldeia'] ?></b></p> 
					</div>
					<div class="center">
						<img src="../../imgPopulasaun/<?= $r['foto'] ?>" width="150px" height="120px" style="position: absolute; margin-left:90vh; margin-top:-23vh;">
					</div>
					<div class="right"  style="position: absolute; margin-left:150vh; margin-top: -26vh;">
						<p style="width: 250px";>Nu Ficha Familia : <b><?= $r['id_umkn'] ?></b></p>   
						<p style="width: 300px";>Naran Chefe Familia : <b><?= $r['nrn_populasaun'] ?></b></p> 
						<p style="width: 250px";>Data Registu : <b><?= $r['data_registu'] ?></b></p> 
						<!-- <p style="width: 250px";>Aldeia : <?= $r['nrn_aldeia'] ?></p>  -->
					</div>
				</div> 
			</div>

			<thead>
				<tr bgcolor="yellow">
					<!-- <th>Id Uma Kain</th> -->
					<th>Naran  Membro Uma Kain</th>
					<th>Sexo</th>
					<th>Relasaun Familia</th>
					<th>Hela Fatin</th>
					<th>Data Moris</th>
					<th>Estadu Civil</th>
					<th>Religiaun</th>
					<th>Aldeia</th>
					<th>Profisaun</th>
					<th>Literaria</th>
					<!-- <th>Foto</th> -->
				</tr>
			</thead>



				<tbody>
					<?php 

			$sql=$conn->query("SELECT * FROM tb_dtl_umkn 

				JOIN tb_populasaun ON tb_dtl_umkn.id_populasaun=tb_populasaun.id_populasaun
				JOIN tb_rel_fam ON tb_populasaun.id_rel_fam=tb_rel_fam.id_rel_fam
				JOIN tb_estadu_civil ON tb_populasaun.id_estadu_civil=tb_estadu_civil.id_estadu_civil
				JOIN tb_religiaun ON tb_populasaun.id_religiaun=tb_religiaun.id_religiaun
				JOIN tb_aldeia ON tb_populasaun.id_aldeia=tb_aldeia.id_aldeia
				JOIN tb_profisaun ON tb_populasaun.id_profisaun=tb_profisaun.id_profisaun
				JOIN tb_literaria ON tb_populasaun.id_literaria=tb_literaria.id_literaria

				WHERE tb_dtl_umkn.id_umkn='$idum'

				");	
			// $rufsa=$sql->fetch_array();

			while($rufsa=$sql->fetch_array()){
				?>

					<tr>
						<!-- <td><?= $r['id_umkn'] ?></td> -->
						<td><?= $rufsa['nrn_populasaun'] ?></td>
						<td><?= $rufsa['sexo'] ?></td>
						<td><?= $rufsa['nrn_rel_fam'] ?></td>
						<td><?= $rufsa['hela_fatin'] ?></td>
						<td><?= $rufsa['data_moris'] ?></td>
						<td><?= $rufsa['nrn_estadu_civil'] ?></td>
						<td><?= $rufsa['nrn_religiaun'] ?></td>
						<td><?= $rufsa['nrn_aldeia'] ?></td>
						<td><?= $rufsa['nrn_profisaun'] ?></td>
						<td><?= $rufsa['nrn_literaria'] ?></td>
						<!-- <td><img src="../../imgPopulasaun/<?= $r['foto'] ?>" width="150px" height="120px"></td> -->

					</tr>
					<?php } ?>

				</tbody> 

			</table> <hr>
		<?php } ?>
		<br>

		<div class="asinatura" style="color:black; text-align: center; margin-left: 400px;" >
			<div class="suku">
				<h5>XEFE SUKU CAICLOI</h5><br>
				<p>JELINO DA SILVA</p>
			</div>
		</div>

	</div>