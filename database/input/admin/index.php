<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
       <a href="?pagina=aumentaAdmin" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Aumenta Dadus</a>
       <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> <?= $titulu; ?></a>
   </div>
   <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Admin</th>
                    <th>Naran</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                $idprof = $_SESSION['idPopulasaun'];
                $admin = mq("SELECT * FROM tb_admin, tb_populasaun WHERE tb_admin.id_populasaun=tb_populasaun.id_populasaun");
                while ($data = mfa($admin)) {
                    $no = 1;
                    ?>

                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['id_admin']; ?></td>
                        <td><?= $data['nrn_populasaun']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['password']; ?></td>
                        <td>
                            <a href="?pagina=hadiaAdmin&id=<?= $data['id_admin'] ?>"><i class="fa fa-edit text-primary"></i></a>
                            <a href="?pagina=hamosAdmin&id=<?= $data['id_admin'] ?>"><i class="fa fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>