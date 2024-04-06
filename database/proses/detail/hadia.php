<?php 
$id = $_GET['id'];
if(isset($_POST['hadia'])){

  $id_dtl_umkn = $_POST['id_dtl_umkn'];
  $id_umkn = $_POST['id_umkn'];
  $id_populasaun = $_POST['id_populasaun'];

  mq("UPDATE tb_dtl_umkn SET
    id_dtl_umkn='$id_dtl_umkn',
    id_umkn='$id_umkn',
    id_populasaun='$id_populasaun'
    WHERE id_dtl_umkn='$id'
    ");
  alert('hadia', 'umkn', 'umkn');

}
?>

<div class="container">
  <?php 
  $allData = mfa_mq("tb_dtl_umkn", "id_dtl_umkn");
  ?>
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="id" class="form-label">Id Detallu Uma Kain</label>
          <input type="text" class="form-control" id="id" name="id_dtl_umkn" value="<?= $allData['id_dtl_umkn']; ?>">
        </div>
        
        <div class="mb-3">
          <label for="id_profisaun" class="form-label">Chefe Uma kain</label>
          <input type="text" class="form-control" readonly name="id_umkn" value="<?= $allData['id_umkn']; ?>">
        </div>

        <div class="mb-3">
          <label for="id_profisaun" class="form-label">Populasaun Registu</label>
          <select class="form-select form-control" name="id_populasaun" aria-label="Default select example">
            <option selected disabled>Hili Populasaun</option>
            <?php 
            $umkn = mq("SELECT * FROM tb_populasaun");
            while ($data = mfa($umkn)) {
             ?>

             <option <?php if($allData['id_populasaun'] == $data['id_populasaun']) echo "selected"; ?> value="<?= $data['id_populasaun']; ?>"><?= $data['nrn_populasaun']; ?></option>
           <?php } ?>
         </select>
       </div>

       <div class="mb-3">
        <button type="submit" name="hadia" class="btn btn-primary btn-sm btn-block"><i class="fa fa-save"></i> Hadia</button>
      </div>

    </div>




  </form>
</div>
</div>