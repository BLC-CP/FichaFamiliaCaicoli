<?php
$id = $_GET['id'];
if(isset($_POST['hadia'])){
  $id_religiaun = $_POST['id_religiaun'];
  $nrn_religiaun = $_POST['nrn_religiaun'];
  $obs = $_POST['obs'];

  mq("UPDATE tb_religiaun SET
    id_religiaun='$id_religiaun',
    nrn_religiaun='$nrn_religiaun',
    obs_religiaun='$obs'
    WHERE id_religiaun = '$id'
    ");
  alert('hadia', 'religiaun', 'hadiaReligiaun');

}
?>

<div class="container">
  <?php 
  $dadus = mfa_mq('tb_religiaun', 'id_religiaun');
  ?>
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
          <label class="form-label">Id Religiaun</label>
          <input type="text" class="form-control" name="id_religiaun" value="<?= $dadus['id_religiaun']; ?>">
        </div>
        <div class="mb-3">
          <label for="religiaun" class="form-label">Religiaun</label>
          <input type="text" class="form-control" id="religiaun" name="nrn_religiaun" value="<?= $dadus['nrn_religiaun']; ?>">
        </div>
        <div class="mb-3">
          <label for="obs" class="form-label">Observasaun</label>
         <input type="text" class="form-control" id="obs" name="obs" value="<?= $dadus['obs_religiaun']; ?>">
        </div>
        <div class="mb-3">
          <button type="submit" name="hadia" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Hadia</button>
        </div>
      </form>
    </div>
  </div>
</div>