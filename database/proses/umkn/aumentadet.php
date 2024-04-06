<?php 
$id = $_GET['id'];
if(isset($_POST['aumenta'])){

  $id_dtl_umkn = $_POST['id_dtl_umkn'];
  $id_umkn = $_POST['id_umkn'];
  $id_populasaun = $_POST['id_populasaun'];

  mq("INSERT INTO tb_dtl_umkn VALUES('$id_dtl_umkn', '$id_umkn', '$id_populasaun')");
  alert('aumenta', 'umkn', 'aumeUmkn');

}
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="id" class="form-label">Id Detallu Uma Kain</label>
          <input type="text" class="form-control" id="id" name="id_dtl_umkn" value="<?= uniqueId('dtlumkn', 'tb_dtl_umkn'); ?>">
        </div>
        
        <div class="mb-3">
          <label for="id_profisaun" class="form-label">Chefe Uma kain</label>
           <input type="text" class="form-control" readonly name="id_umkn" value="<?= $id; ?>">
        </div>

        <div class="mb-3">
          <label for="id_profisaun" class="form-label">Membru Familia</label>
          <select class="form-select form-control" name="id_populasaun" aria-label="Default select example">
            <option selected disabled>Hili Membru Familia</option>
             <?php 
              $umkn = mq("SELECT * FROM tb_populasaun");
               while ($data = mfa($umkn)) {
             ?>

            <option value="<?= $data['id_populasaun']; ?>"><?= $data['nrn_populasaun']; ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="mb-3">
          <button type="submit" name="aumenta" class="btn btn-primary btn-sm btn-block"><i class="fa fa-save"></i> Aumenta</button>
        </div>

      </div>




    </form>
  </div>
</div>