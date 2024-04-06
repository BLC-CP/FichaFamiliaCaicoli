<?php 

$id = $_GET['id'];
if(isset($_POST['hadia'])){

  $id_umkn = $_POST['id_umkn'];
  $id_populasaun = $_POST['id_populasaun'];
  $data_registu = $_POST['data_registu'];

  mq("UPDATE tb_umkn SET
    id_umkn='$id_umkn',
    id_populasaun='$id_populasaun',
    data_registu='$data_registu'
    WHERE id_umkn='$id'
    ");
  alert('hadia', 'umkn', 'hadiaUmkn');

}
?>

<div class="container">
   <?php 
    $allData = mfa_mq("tb_umkn", "id_umkn");
   ?>
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="id" class="form-label">Id Uma Kain</label>
          <input type="text" class="form-control" id="id" name="id_umkn" value="<?=  $allData['id_umkn']; ?>">
        </div>
        
        <div class="mb-3">
          <label for="id_profisaun" class="form-label">Chefe Uma kain</label>
          <select class="form-select form-control" name="id_populasaun" aria-label="Default select example">
            <option selected disabled>Hili Chefe Uma kain</option>
             <?php 
              $populasaun = mq("SELECT * FROM tb_populasaun");
               while ($data = mfa($populasaun)) {
             ?>

            <option <?php if($allData['id_populasaun'] == $data['id_populasaun']) echo "selected"; ?> value="<?= $data['id_populasaun']; ?>"><?= $data['nrn_populasaun']; ?></option>
            <?php } ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="data_moris" class="form-label">Data Registu</label>
          <input type="date" class="form-control" value="<?=  $allData['data_registu']; ?>" id="data_moris" name="data_registu">
        </div>

        <div class="mb-3">
          <button type="submit" name="hadia" class="btn btn-primary btn-sm btn-block"><i class="fa fa-save"></i> Hadia</button>
        </div>

      </div>




    </form>
  </div>
</div>