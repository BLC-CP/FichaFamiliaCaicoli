<?php 
  if(isset($_POST['aumenta'])){
    $id_rel_fam = $_POST['id_rel_fam'];
    $nrn_rel_fam = $_POST['nrn_rel_fam'];

    mq("INSERT INTO tb_rel_fam VALUES('$id_rel_fam', '$nrn_rel_fam')");
    alert('aumenta', 'relfam', 'aumentaRelfam');

  }
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
        <label for="id" class="form-label">Id Relasaun Familia</label>
        <input type="text" class="form-control" id="id" name="id_rel_fam" value="<?= uniqueId('relfam', 'tb_rel_fam'); ?>">
      </div>
      <div class="mb-3">
        <label for="rel_fam" class="form-label">Relasaun Familia</label>
        <input type="text" class="form-control" id="rel_fam" name="nrn_rel_fam" placeholder="Naran Relasaun Familia">
      </div>
      <div class="mb-3">
        <button type="submit" name="aumenta" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Aumenta</button>
      </div>
    </form>
  </div>
</div>
</div>