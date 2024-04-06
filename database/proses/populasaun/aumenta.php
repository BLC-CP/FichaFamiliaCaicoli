<?php 
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
  $foto = uploadFoto();
  $obs = $_POST['obs'];

  mq("INSERT INTO tb_populasaun VALUES('$id_populasaun', '$nrn_populasaun', '$sexo', '$data_moris', '$hela_fatin', '$nu_telefone', '$data_registu', '$id_rel_fam', '$id_aldeia', '$id_profisaun', '$id_literaria', '$id_religiaun', '$id_estadu_civil', '$foto', '$obs')");
  alert('aumenta', 'populasaun', 'aumentaPopulasaun');

}
?>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="id" class="form-label">Id Populasaun</label>
          <input type="text" class="form-control" id="id" name="id_populasaun" value="<?= uniqueId('populasaun', 'tb_populasaun'); ?>">
        </div>
        <div class="mb-3">
          <label for="nrn_populasaun" class="form-label">Naran Populasaun</label>
          <input type="text" class="form-control" id="nrn_populasaun" name="nrn_populasaun" placeholder="Naran Populasaun">
        </div>
        <div class="mb-3">
          <label>Sexo :</label>
          <input type="radio" name="sexo" value="Mane"> Mane        
          <input type="radio" name="sexo" value="Feto"> Feto        
        </div>
        <div class="mb-3">
          <label for="data_moris" class="form-label">Data Moris</label>
          <input type="date" class="form-control" id="data_moris" name="data_moris">
        </div>
        <div class="mb-3">
          <label for="hela_fatin" class="form-label">Hela Fatin</label>
          <input type="text" class="form-control" id="hela_fatin" name="hela_fatin" placeholder="Hela Fatin">
        </div>
        <div class="mb-3">
          <label for="nu_telefone" class="form-label">Nu Telefone</label>
          <input type="text" class="form-control" id="nu_telefone" name="nu_telefone" placeholder="Nu Telefone">
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
               while ($sd = mfa($rel_fam)) {
             ?>

            <option value="<?= $sd['id_rel_fam']; ?>"><?= $sd['nrn_rel_fam']; ?></option>
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

            <option value="<?= $data['id_aldeia']; ?>"><?= $data['nrn_aldeia']; ?></option>
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

            <option value="<?= $data['id_profisaun']; ?>"><?= $data['nrn_profisaun']; ?></option>
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

            <option value="<?= $data['id_literaria']; ?>"><?= $data['nrn_literaria']; ?></option>
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

            <option value="<?= $data['id_religiaun']; ?>"><?= $data['nrn_religiaun']; ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="id_estadu_civil" class="form-label">Estadu Civil</label>
          <select class="form-select form-control" name="id_estadu_civil" aria-label="Default select example">
            <option selected disabled>Hili Estadu Civil</option>
           <?php 
              $estadu_civil = mq("SELECT * FROM tb_estadu_civil");
               while ($data = mfa($estadu_civil)) {
             ?>

            <option value="<?= $data['id_estadu_civil']; ?>"><?= $data['nrn_estadu_civil']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="foto" class="form-label">Foto</label>
          <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="mb-3">
          <label for="obs" class="form-label">Observasaun</label>
          <textarea class="form-control" name="obs" id="obs" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <button type="submit" name="aumenta" class="btn btn-primary btn-sm btn-block"><i class="fa fa-save"></i> Aumenta</button>
        </div>

      </div>




    </form>
  </div>
</div>