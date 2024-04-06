<?php 
  if(isset($_POST['aumenta'])){
    $id_profisaun = $_POST['id_profisaun'];
    $nrn_profisaun = $_POST['nrn_profisaun'];
    $obs = $_POST['obs'];

    mq("INSERT INTO tb_profisaun VALUES('$id_profisaun', '$nrn_profisaun', '$obs')");
    alert('aumenta', 'profisaun', 'aumentaProfisaun');

  }
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
        <label for="id" class="form-label">Profisaun</label>
        <input type="text" class="form-control" id="id" name="id_profisaun" value="<?= uniqueId('profisaun', 'tb_profisaun') ?>">
      </div>
      <div class="mb-3">
        <label for="profisaun" class="form-label">Profisaun</label>
        <input type="text" class="form-control" id="profisaun" name="nrn_profisaun" placeholder="Naran Profisaun">
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