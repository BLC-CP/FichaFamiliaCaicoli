<?php
$id = $_GET['id'];
if(isset($_POST['hadia'])){
  $id_aldeia = $_POST['id_aldeia'];
  $nrn_aldeia = $_POST['nrn_aldeia'];
  $obs = $_POST['obs'];

  mq("UPDATE tb_aldeia SET
    id_aldeia='$id_aldeia',
    nrn_aldeia='$nrn_aldeia',
    obs_aldeia='$obs'
    WHERE id_aldeia = '$id'
    ");
  alert('hadia', 'aldeia', 'aldeia');

}
?>

<div class="container">
  <?php 
  $dadus = mfa_mq('tb_aldeia', 'id_aldeia');
  ?>
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
          
          <div class="mb-3">
          <label for="aldeia" class="form-label">Aldeia</label>
          <input type="text" class="form-control" name="id_aldeia" value="<?= $dadus['id_aldeia']; ?>">
        </div>
        <div class="mb-3">
          <label for="aldeia" class="form-label">Aldeia</label>
          <input type="text" class="form-control" id="aldeia" name="nrn_aldeia" value="<?= $dadus['nrn_aldeia']; ?>">
        </div>
        <div class="mb-3">
          <label for="obs" class="form-label">Observasaun</label>
         <input type="text" class="form-control" id="obs" name="obs" value="<?= $dadus['obs_aldeia']; ?>">
        </div>
        <div class="mb-3">
          <button type="submit" name="hadia" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Hadia</button>
        </div>
      </form>
    </div>
  </div>
</div>