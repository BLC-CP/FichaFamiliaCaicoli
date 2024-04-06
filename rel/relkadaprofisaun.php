

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
			<?php
			
			$id_profisaun = $_POST['id_profisaun'];
			$a=$conn->query("select * FROM tb_profisaun where id_profisaun like '$id_profisaun' LIMIT 1");
			while($r=$a->fetch_array()){
				
				?>
				<tr>
					
					<td>
						Dadus husi naran <b><?php echo $r['nrn_profisaun']; ?></b> nian.
					</td>
					
				</tr>
			<?php } ?>
		</tbody>
		
	</table>
	<br>
	
	<table width="100%" border="1">
		<thead>
			<tr bgcolor="yellow">
				<th>No</th>
				<th>Naran</th>
				<th>Sexo</th>
				<th>Data Moris</th>
				<th>Hela Fatin</th>
				<th>Telefone</th>
				<th>Data Registu</th>
				<th>Aldeia</th>
				<th>Profisaun</th>
				<th>Literaria</th>
				<th>Religiaun</th>
				<th>Estadu Civil</th>
				<th>Foto</th>
				<th>Observasaun</th>
			</tr>
		</thead>
		<tbody>
			<?php
			
			$id_profisaun = $_POST['id_profisaun'];
			$no = 1;
			$a=$conn->query("SELECT * FROM tb_populasaun, tb_aldeia, tb_profisaun, tb_literaria, tb_religiaun, tb_estadu_civil WHERE 

				tb_populasaun.id_aldeia=tb_aldeia.id_aldeia AND
				tb_populasaun.id_profisaun=tb_profisaun.id_profisaun AND
				tb_populasaun.id_literaria=tb_literaria.id_literaria AND
				tb_populasaun.id_religiaun=tb_religiaun.id_religiaun AND
				tb_populasaun.id_estadu_civil=tb_estadu_civil.id_estadu_civil AND tb_profisaun.id_profisaun LIKE '$id_profisaun'
				");	

			while($r=$a->fetch_array()){
				?>

				<tr>
					<td><?= $no++; ?></td>
					<td><?= $r['nrn_populasaun']; ?></td>
					<td><?= $r['sexo'] ?></td>
					<td><?= $r['data_moris'] ?></td>
					<td><?= $r['hela_fatin'] ?></td>
					<td><?= $r['telefone'] ?></td>
					<td><?= $r['data_registu'] ?></td>
					<td><?= $r['nrn_aldeia'] ?></td>
					<td><?= $r['nrn_profisaun'] ?></td>
					<td><?= $r['nrn_literaria'] ?></td>
					<td><?= $r['nrn_religiaun'] ?></td>
					<td><?= $r['nrn_estadu_civil'] ?></td>
					<td><img src="../imgPopulasaun/<?= $r['foto'] ?>" width='55px'></td>
					<td><?= $r['obs_populasaun'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
		
	</table><br>

	<div class="asinatura" style="color:black; text-align: center; margin-left: 400px;" >
		<div class="suku">
				<h5>XEFE SUKU CAICLOI</h5><br>
				<p>JELINO DA SILVA</p>
			</div>
	</div>
</div>