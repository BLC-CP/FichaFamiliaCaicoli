<?php
$id = $_GET['id'];
if(isset($_POST['hadia'])){
  $id_estadu_civil = $_POST['id_estadu_civil'];
  $nrn_estadu_civil = $_POST['nrn_estadu_civil'];
  $obs = $_POST['obs'];

  mq("UPDATE tb_estadu_civil SET
    id_estadu_civil='$id_estadu_civil',
    nrn_estadu_civil='$nrn_estadu_civil',
    obs_estadu_civil='$obs'
    WHERE id_estadu_civil = '$id'
    ");
  alert('hadia', 'estadu_sivil', 'hadiaReligiaun');

}
?>

<div class="container">
  <?php 
  $dadus = mfa_mq('tb_estadu_civil', 'id_estadu_civil');
  ?>
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
          <label class="form-label">Id Religiaun</label>
          <input type="text" class="form-control" name="id_estadu_civil" value="<?= $dadus['id_estadu_civil']; ?>">
        </div>
        <div class="mb-3">
          <input type="hidden" name="id_estadu_civil" value="<?= $dadus['id_estadu_civil']; ?>">
          <label for="estadu_civil" class="form-label">Religiaun</label>
          <input type="text" class="form-control" id="estadu_civil" name="nrn_estadu_civil" value="<?= $dadus['nrn_estadu_civil']; ?>">
        </div>
        <div class="mb-3">
          <label for="obs" class="form-label">Observasaun</label>
         <input type="text" class="form-control" id="obs" name="obs" value="<?= $dadus['obs_estadu_civil']; ?>">
        </div>
        <div class="mb-3">
          <button type="submit" name="hadia" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Hadia</button>
        </div>
      </form>
    </div>
  </div>
</div>