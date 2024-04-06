<?php
$id = $_GET['id'];
if(isset($_POST['hadia'])){
  $id_profisaun = $_POST['id_profisaun'];
  $nrn_profisaun = $_POST['nrn_profisaun'];
  $obs = $_POST['obs'];

  mq("UPDATE tb_profisaun SET
    id_profisaun='$id_profisaun',
    nrn_profisaun='$nrn_profisaun',
    obs_profisaun='$obs'
    WHERE id_profisaun = '$id'
    ");
  alert('hadia', 'profisaun', 'hadiaProfisaun');

}
?>

<div class="container">
  <?php 
  $dadus = mfa_mq('tb_profisaun', 'id_profisaun');
  ?>
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
          <label for="profisaun" class="form-label">Profisaun</label>
          <input type="text" class="form-control" name="id_profisaun" value="<?= $dadus['id_profisaun']; ?>">        </div>
          <div class="mb-3">
            <label for="profisaun" class="form-label">Profisaun</label>
            <input type="text" class="form-control" id="profisaun" name="nrn_profisaun" value="<?= $dadus['nrn_profisaun']; ?>">
          </div>
          <div class="mb-3">
            <label for="obs" class="form-label">Observasaun</label>
            <input type="text" class="form-control" id="obs" name="obs" value="<?= $dadus['obs_profisaun']; ?>">
          </div>
          <div class="mb-3">
            <button type="submit" name="hadia" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Hadia</button>
          </div>
        </form>
      </div>
    </div>
  </div>