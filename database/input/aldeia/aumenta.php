<?php 
  if(isset($_POST['aumenta'])){
    $id_aldeia = $_POST['id_aldeia'];
    $nrn_aldeia = $_POST['nrn_aldeia'];
    $obs = $_POST['obs'];

    mq("INSERT INTO tb_aldeia VALUES('$id_aldeia', '$nrn_aldeia', '$obs')");
    alert('aumenta', 'aldeia', 'aumentaAldeia');

  }
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
        <label for="id" class="form-label">Id Aldeia</label>
        <input type="text" class="form-control" id="id" name="id_aldeia" value="<?= uniqueId('aldeia', 'tb_aldeia'); ?>">
      </div>
      <div class="mb-3">
        <label for="aldeia" class="form-label">Aldeia</label>
        <input type="text" class="form-control" id="aldeia" name="nrn_aldeia" placeholder="Naran Aldeia">
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