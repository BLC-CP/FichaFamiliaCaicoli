<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
       <a href="?pagina=aumentaEstadu_civil" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Aumenta Dadus</a>
       <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> <?= $titulu; ?></a>
   </div>
   <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Estadu Civil</th>
                    <th>Estadu Civil</th>
                    <th>Observasaun</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
               <?php 
               $estadu_civil = mq("SELECT * FROM tb_estadu_civil");
                $no = 1;
               while ($data = mfa($estadu_civil)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['id_estadu_civil']; ?></td>
                    <td><?= $data['nrn_estadu_civil']; ?></td>
                    <td><?= $data['obs_estadu_civil']; ?></td>
                    <td>
                        <a href="?pagina=hadiaEstadu_civil&id=<?= $data['id_estadu_civil']; ?>"><i class="fa fa-edit text-primary"></i></a>
                        <a href="?pagina=hamosEstadu_civil&id=<?= $data['id_estadu_civil']; ?>" onclick="return confirm('Tebes atu hamos Estadu Civil <?= $data['nrn_estadu_civil'] ?> ');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>