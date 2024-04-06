<?php
$id = $_GET['id'];
if(isset($_POST['hadia'])){
  $id_literaria = $_POST['id_literaria'];
  $nrn_literaria = $_POST['nrn_literaria'];
  $obs = $_POST['obs'];

  mq("UPDATE tb_literaria SET
    id_literaria='$id_literaria',
    nrn_literaria='$nrn_literaria',
    obs_literaria='$obs'
    WHERE id_literaria = '$id'
    ");
  alert('hadia', 'literaria', 'hadiaLiteraria');

}
?>

<div class="container">
  <?php 
  $dadus = mfa_mq('tb_literaria', 'id_literaria');
  ?>
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
          <input type="hidden" name="id_literaria" value="<?= $dadus['id_literaria']; ?>">
          <label for="literaria" class="form-label">Id Literaria</label>
          <input type="text" class="form-control" id="literaria" name="id_literaria" value="<?= $dadus['id_literaria']; ?>">
        </div>
        <div class="mb-3">
          <label for="literaria" class="form-label">Literaria</label>
          <input type="text" class="form-control" id="literaria" name="nrn_literaria" value="<?= $dadus['nrn_literaria']; ?>">
        </div>
        <div class="mb-3">
          <label for="obs" class="form-label">Observasaun</label>
         <input type="text" class="form-control" id="obs" name="obs" value="<?= $dadus['obs_literaria']; ?>">
        </div>
        <div class="mb-3">
          <button type="submit" name="hadia" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Hadia</button>
        </div>
      </form>
    </div>
  </div>
</div>