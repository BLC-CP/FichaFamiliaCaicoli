<?php

$id = $_GET['id'];
if(isset($_POST['aumenta'])){

  $id_populasaun = $_POST['id_populasaun'];
  $nrn_populasaun = $_POST['nrn_populasaun'];
  $sexo = $_POST['sexo'];
  $data_moris = $_POST['data_moris'];
  $hela_fatin = $_POST['hela_fatin'];
  $nu_telefone = $_POST['nu_telefone'];
  $data_registu = $_POST['data_registu'];
  $id_rel_fam = $_POST['id_rel_fam'];
  $id_aldeia = $_POST['id_aldeia'];
  $id_profisaun = $_POST['id_profisaun'];
  $id_literaria = $_POST['id_literaria'];
  $id_religiaun = $_POST['id_religiaun'];
  $id_estadu_civil = $_POST['id_estadu_civil'];
  if($_FILES['foto']['error'] === 4){
    $foto = $_POST['img'];
  }else{
    $foto = uploadFoto();
  }
  $obs = $_POST['obs'];

  mq("UPDATE tb_populasaun SET
    id_populasaun='$id_populasaun', 
    nrn_populasaun='$nrn_populasaun',
    sexo='$sexo',
    data_moris='$data_moris',
    hela_fatin='$hela_fatin',
    telefone='$nu_telefone',
    data_registu='$data_registu',
    id_rel_fam='$id_rel_fam',
    id_aldeia='$id_aldeia',
    id_profisaun='$id_profisaun',
    id_literaria='$id_literaria',
    id_religiaun='$id_religiaun',
    id_estadu_civil='$id_estadu_civil',
    foto='$foto',
    obs_populasaun='$obs'
    WHERE id_populasaun='$id'
    ");
  alert('hadia', 'populasaun', 'hadiaPopulasaun');

}
?>

<div class="container">
  <?php 
  $allData = mfa_mq("tb_populasaun", "id_populasaun");
  ?>
  <div class="row">
    <div class="col-md-6">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nrn_populasaun" class="form-label">Id Populasaun</label>
          <input type="text" class="form-control" id="nrn_populasaun" name="id_populasaun" value="<?= $allData['id_populasaun']; ?>">
        </div>
        <div class="mb-3">
          <label for="nrn_populasaun" class="form-label">Naran Populasaun</label>
          <input type="hidden" class="form-control" id="nrn_populasaun" name="id_populasaun" value="<?= $allData['id_populasaun']; ?>">
          <input type="text" class="form-control" id="nrn_populasaun" name="nrn_populasaun" value="<?= $allData['nrn_populasaun']; ?>">
        </div>
        <div class="mb-3">
          <label>Sexo :</label>
          <input type="radio" name="sexo" <?= $allData['sexo'] == 'Mane' ? 'checked' : null ?> value="Mane"> Mane        
          <input type="radio" name="sexo" <?= $allData['sexo'] == 'Feto' ? 'checked' : null ?> value="Feto"> Feto        
        </div>
        <div class="mb-3">
          <label for="data_moris" class="form-label">Data Moris</label>
          <input type="date" class="form-control" value="<?= $allData['data_moris']; ?>" id="data_moris" name="data_moris">
        </div>
        <div class="mb-3">
          <label for="hela_fatin" class="form-label">Hela Fatin</label>
          <input type="text" class="form-control" value="<?= $allData['hela_fatin']; ?>" id="hela_fatin" name="hela_fatin">
        </div>
        <div class="mb-3">
          <label for="nu_telefone" class="form-label">Nu Telefone</label>
          <input type="text" class="form-control" id="nu_telefone" name="nu_telefone" value="<?= $allData['telefone']; ?>">
        </div>
        <?php 
        $d_registu = date("Y-m-d");
        ?>
        <div class="mb-3">
          <label for="nu_telefone" class="form-label">Data Registu</label>
          <input type="date" class="form-control" id="nu_telefone" name="data_registu" value="<?= $d_registu; ?>">
        </div>

        <div class="mb-3">
        <label for="id_aldeia" class="form-label">Relasaun Familia</label>
        <select class="form-select form-control" name="id_rel_fam" aria-label="Default select example">
          <option selected disabled>Hili Relasaun Familia</option>

          <?php 
          $rel_fam = mq("SELECT * FROM tb_rel_fam");
          while ($dataa = mfa($rel_fam)) {
           ?>

           <option <?php if($allData['id_rel_fam']   == $dataa['id_rel_fam']) echo "selected"; ?> value="<?= $dataa['id_rel_fam']; ?>"><?= $dataa['nrn_rel_fam']; ?></option>
         <?php } ?>
       </select>
     </div>

     </div>

     <div class="col-md-6">

     <div class="mb-3">
          <label for="id_aldeia" class="form-label">Aldeia</label>
          <select class="form-select form-control" name="id_aldeia" aria-label="Default select example">
            <option selected disabled>Hili Aldeia</option>

            <?php 
            $aldeia = mq("SELECT * FROM tb_aldeia");
            while ($data = mfa($aldeia)) {
             ?>

             <option <?php if($allData['id_aldeia'] == $data['id_aldeia']); echo "selected";  ?> value="<?= $data['id_aldeia']; ?>"><?= $data['nrn_aldeia']; ?></option>
           <?php } ?>
         </select>
       </div>


     <div class="mb-3">
      <label for="id_profisaun" class="form-label">Profisaun</label>
      <select class="form-select form-control" name="id_profisaun" aria-label="Default select example">
        <option selected disabled>Hili Profisaun</option>
        <?php 
        $profisaun = mq("SELECT * FROM tb_profisaun");
        while ($data = mfa($profisaun)) {
         ?>

         <option <?php if($allData['id_profisaun'] == $data['id_profisaun']); echo "selected"; ?> value="<?= $data['id_profisaun']; ?>"><?= $data['nrn_profisaun']; ?></option>
       <?php } ?>
     </select>
   </div>
   <div class="mb-3">
    <label for="id_literaria" class="form-label">Literaria</label>
    <select class="form-select form-control" name="id_literaria" aria-label="Default select example">
      <option selected disabled>Hili Literaria</option>
      <?php 
      $literaria = mq("SELECT * FROM tb_literaria");
      while ($data = mfa($literaria)) {
       ?>

       <option <?php if($allData['id_literaria'] == $data['id_literaria']); echo "selected"; ?> value="<?= $data['id_literaria']; ?>"><?= $data['nrn_literaria']; ?></option>
     <?php } ?>
   </select>
 </div>

 <div class="mb-3">
  <label for="id_religiaun" class="form-label">Religiaun</label>
  <select class="form-select form-control" name="id_religiaun" aria-label="Default select example">
    <option selected disabled>Hili Religiaun</option>
    <?php 
    $religiaun = mq("SELECT * FROM tb_religiaun");
    while ($data = mfa($religiaun)) {
     ?>

     <option <?php if($allData['id_religiaun'] == $data['id_religiaun']); echo "selected"; ?> value="<?= $data['id_religiaun']; ?>"><?= $data['nrn_religiaun']; ?></option>
   <?php } ?>
 </select>
</div>

<div class="mb-3">
  <label for="id_estadu_civil" class="form-label">Estadu Civil</label>
  <select class="form-select form-control" name="id_estadu_civil" aria-label="Default select example">
   <?php 
   $estadu_civil = mq("SELECT * FROM tb_estadu_civil");
   while ($data = mfa($estadu_civil)) {
     ?>

     <option <?php if($allData['id_estadu_civil'] == $data['id_estadu_civil']); echo "selected"; ?> value="<?= $data['id_estadu_civil']; ?>"><?= $data['nrn_estadu_civil']; ?></option>
   <?php } ?>
 </select>
</div>
<div class="mb-3">
  <label for="foto" class="form-label">Foto</label>
  <input type="file" class="form-control" id="foto" value="<?= $allData['foto']; ?>" name="foto">
  <input type="hidden" class="form-control" id="foto" value="<?= $allData['foto']; ?>" name="img">
</div>
<div class="mb-3">
  <label for="obs" class="form-label">Observasaun</label>
  <input type="text" class="form-control" id="foto" value="<?= $allData['obs_populasaun']; ?>" name="obs">
</div>
<div class="mb-3">
  <button type="submit" name="aumenta" class="btn btn-primary btn-sm btn-block"><i class="fa fa-save"></i> Hadia</button>
</div>

</div>




</form>
</div>
</div>