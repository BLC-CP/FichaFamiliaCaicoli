<?php
$id = $_GET['id'];
if(isset($_POST['hadia'])){
  $id_rel_fam = $_POST['id_rel_fam'];
  $nrn_rel_fam = $_POST['nrn_rel_fam'];

  mq("UPDATE tb_rel_fam SET
    id_rel_fam='$id_rel_fam',
    nrn_rel_fam='$nrn_rel_fam'
    WHERE id_rel_fam = '$id'
    ");
  alert('hadia', 'relfam', 'relfam');

}
?>

<div class="container">
  <?php 
  $dadus = mfa_mq('tb_rel_fam', 'id_rel_fam');
  ?>
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
          
          <div class="mb-3">
          <label for="rel_fam" class="form-label">Id Relasaun Familia</label>
          <input type="text" class="form-control" name="id_rel_fam" value="<?= $dadus['id_rel_fam']; ?>">
        </div>
        <div class="mb-3">
          <label for="rel_fam" class="form-label">Relasaun Familia</label>
          <input type="text" class="form-control" id="rel_fam" name="nrn_rel_fam" value="<?= $dadus['nrn_rel_fam']; ?>">
        </div>
        <div class="mb-3">
          <label for="obs" class="form-label">Observasaun</label>
         <input type="text" class="form-control" id="obs" name="obs" value="<?= $dadus['obs_rel_fam']; ?>">
        </div>
        <div class="mb-3">
          <button type="submit" name="hadia" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Hadia</button>
        </div>
      </form>
    </div>
  </div>
</div>