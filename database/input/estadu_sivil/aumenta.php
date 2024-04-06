<?php 
  if(isset($_POST['aumenta'])){
    $id_estadu_civil = $_POST['id_estadu_civil'];
    $nrn_estadu_civil = $_POST['nrn_estadu_civil'];
    $obs = $_POST['obs'];

    mq("INSERT INTO tb_estadu_civil VALUES('$id_estadu_civil', '$nrn_estadu_civil', '$obs')");
    alert('aumenta', 'estadu_sivil', 'aumentaEstadu_civil');

  }
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
        <label for="id" class="form-label">Id Estadu Civil</label>
        <input type="text" class="form-control" id="id" name="id_estadu_civil" value="<?= uniqueId('eCivil', 'tb_estadu_civil'); ?>">
      </div>
      <div class="mb-3">
        <label for="estadu_civil" class="form-label">Estadu Civil</label>
        <input type="text" class="form-control" id="estadu_civil" name="nrn_estadu_civil" placeholder="Naran Estadu Civil">
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