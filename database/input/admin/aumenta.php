<?php 
  if(isset($_POST['aumenta'])){
    $id_admin = $_POST['id_admin'];
    $id_populasaun = $_POST['id_populasaun'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    mq("INSERT INTO tb_admin VALUES('$id_admin', '$id_populasaun', '$username', '$password', '$level')");
    alert('aumenta', 'admin', 'aumentaAldeia');

  }
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
        <div class="mb-3">
        <label for="id" class="form-label">Id Admin</label>
        <input type="text" class="form-control" id="id" name="id_admin" value="<?= uniqueId('admin', 'tb_admin'); ?>">
      </div>
      <div class="mb-3">
          <label class="form-label">Populasaun</label>
          <select class="form-select form-control" name="id_populasaun" aria-label="Default select example">
            <option selected disabled>Hili Populasaun</option>

            <?php 
              $rel_fam = mq("SELECT * FROM tb_populasaun");
               while ($sd = mfa($rel_fam)) {
             ?>

            <option value="<?= $sd['id_populasaun']; ?>"><?= $sd['nrn_populasaun']; ?></option>
            <?php } ?>
          </select>
        </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="password">
        <input type="hidden" name="level" value="admin">
      </div>
      <div class="mb-3">
        <button type="submit" name="aumenta" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Aumenta</button>
      </div>
    </form>
  </div>
</div>
</div>