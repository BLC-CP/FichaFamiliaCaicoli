<?php 
if(isset($_POST['aumenta'])){

  $id_umkn = $_POST['id_umkn'];
  $id_populasaun = $_POST['id_populasaun'];
  $data_registu = $_POST['data_registu'];

  mq("INSERT INTO tb_umkn VALUES('$id_umkn', '$id_populasaun', '$data_registu')");
  alert('aumenta', 'umkn', 'aumentaUmkn');

}
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="id" class="form-label">Id Uma Kain</label>
          <input type="text" class="form-control" id="id" name="id_umkn" value="<?= uniqueId('umkn', 'tb_umkn'); ?>">
          <!-- <input type="hidden" class="form-control" id="id" name="id_dtl" value="<?= uniqueId('dtl', 'tb_dtl_umkn'); ?>"> -->
        </div>
        
        <div class="mb-3">
          <label for="id_profisaun" class="form-label">Chefe Uma kain</label>
          <select class="form-select form-control" name="id_populasaun" aria-label="Default select example">
            <option selected disabled>Hili Chefe Uma kain</option>
             <?php 
              $populasaun = mq("SELECT * FROM tb_populasaun");
               while ($data = mfa($populasaun)) {
             ?>

            <option value="<?= $data['id_populasaun']; ?>"><?= $data['nrn_populasaun']; ?></option>
            <?php } ?>
          </select>
        </div>

       <!--  <div class="mb-3">
          <label for="id_profisaun" class="form-label">Uma Kain</label>
          <select class="form-select form-control" name="id_populasaun" aria-label="Default select example">
            <option selected disabled>Hili Uma  Kain</option>
             <?php 
              $umkn = mq("SELECT * FROM tb_umkn, tb_populasaun where tb_umkn.id_populasaun=tb_populasaun.id_populasaun");
               while ($data = mfa($umkn)) {
             ?>

            <option value="<?= $data['id_umkn']; ?>"><?= $data['nrn_populasaun']; ?></option>
            <?php } ?>
          </select>
        </div> -->


        <div class="mb-3">
          <label for="data_moris" class="form-label">Data Registu</label>
          <input type="date" class="form-control" id="data_moris" name="data_registu">
        </div>

        <div class="mb-3">
          <button type="submit" name="aumenta" class="btn btn-primary btn-sm btn-block col-6"><i class="fa fa-save"></i> Aumenta</button>
        </div>

      </div>




    </form>
  </div>
</div>