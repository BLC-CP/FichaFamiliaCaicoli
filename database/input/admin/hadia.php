<?php 
$id = $_GET['id'];
  if(isset($_POST['hadia'])){
    $id_admin = $_POST['id_admin'];
    $id_populasaun = $_POST['id_populasaun'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    mq("UPDATE tb_admin SET
      id_admin='$id_admin',
      id_populasaun='$id_populasaun',
      username='$username',
      password='$password',
      level='$level'
      WHERE id_admin='$id'
      ");
    alert('hadia', 'admin', 'hadiaAldeia');

  }
 ?>

<div class="container">
  <?php 
  $dadus = mfa_mq('tb_admin', 'id_admin');
  ?>
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
        <label for="id" class="form-label">Id Admin</label>
        <input type="text" class="form-control" id="id" name="id_admin" value="<?= $dadus['id_admin']; ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Populasaun</label>
          <select class="form-select form-control" name="id_populasaun" aria-label="Default select example">
            <option selected disabled>Hili Populasaun</option>

            <?php 
              $rel_fam = mq("SELECT * FROM tb_populasaun");
               while ($sd = mfa($rel_fam)) {
             ?>

            <option <?php if($dadus['id_populasaun'] == $sd['id_populasaun']) echo "selected"; ?> value="<?= $sd['id_populasaun']; ?>"><?= $sd['nrn_populasaun']; ?></option>
            <?php } ?>
          </select>
        </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= $dadus['username']; ?>">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="<?= $dadus['password']; ?>">
        <input type="hidden" name="level" value="admin" value="<?= $dadus['level']; ?>">
      </div>
      <div class="mb-3">
        <button type="submit" name="hadia" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Hadia</button>
      </div>
    </form>
  </div>
</div>
</div>