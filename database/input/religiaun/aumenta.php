<?php 
  if(isset($_POST['aumenta'])){
    $id_religiaun = $_POST['id_religiaun'];
    $nrn_religiaun = $_POST['nrn_religiaun'];
    $obs = $_POST['obs'];

    mq("INSERT INTO tb_religiaun VALUES('$id_religiaun', '$nrn_religiaun', '$obs')");
    alert('aumenta', 'religiaun', 'aumentaReligiaun');

  }
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
        <label for="id" class="form-label">Id Religiaun</label>
        <input type="text" class="form-control" id="id" name="id_religiaun" value="<?= uniqueId('religiaun', 'tb_religiaun'); ?>">
      </div>
      <div class="mb-3">
        <label for="religiaun" class="form-label">Religiaun</label>
        <input type="text" class="form-control" id="religiaun" name="nrn_religiaun" placeholder="Naran Religiaun">
      </div>
      <div class="mb-3">
        <label for="obs" class="form-label">Observasaun</label>
        <textarea class="form-control" name="obs" id="obs" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <button type="submit" name="aumenta" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Aumenta</button>
      </div>
    </form>
  </div>
</div>
</div>