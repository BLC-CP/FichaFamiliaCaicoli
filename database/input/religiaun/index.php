<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
       <a href="?pagina=aumentaReligiaun" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Aumenta Dadus</a>
       <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> <?= $titulu; ?></a>
   </div>
   <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Religiaun</th>
                    <th>Religiaun</th>
                    <th>Observasaun</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
               <?php 
               $religiaun = mq("SELECT * FROM tb_religiaun");
                $no = 1;
               while ($data = mfa($religiaun)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['id_religiaun']; ?></td>
                    <td><?= $data['nrn_religiaun']; ?></td>
                    <td><?= $data['obs_religiaun']; ?></td>
                    <td>
                        <a href="?pagina=hadiaReligiaun&id=<?= $data['id_religiaun']; ?>"><i class="fa fa-edit text-primary"></i></a>
                        <a href="?pagina=hamosReligiaun&id=<?= $data['id_religiaun']; ?>" onclick="return confirm('Tebes atu hamos Religiaun <?= $data['nrn_religiaun'] ?> ');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>