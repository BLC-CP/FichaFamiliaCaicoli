<?php 
  if(isset($_POST['aumenta'])){
    $id_literaria = $_POST['id_literaria'];
    $nrn_literaria = $_POST['nrn_literaria'];
    $obs = $_POST['obs'];

    mq("INSERT INTO tb_literaria VALUES('$id_literaria', '$nrn_literaria', '$obs')");
    alert('aumenta', 'literaria', 'aumentaLiteraria');

  }
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
        <label for="literaria" class="form-label">Id Literaria</label>
        <input type="text" class="form-control" id="literaria" name="id_literaria" value="<?= uniqueId('estudo', 'tb_literaria'); ?>">
      </div>
      <div class="mb-3">
        <label for="literaria" class="form-label">Literaria</label>
        <input type="text" class="form-control" id="literaria" name="nrn_literaria" placeholder="Naran Literaria">
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