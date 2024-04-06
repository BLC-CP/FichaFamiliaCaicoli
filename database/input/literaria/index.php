<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
       <a href="?pagina=aumentaLiteraria" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Aumenta Dadus</a>
       <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> <?= $titulu; ?></a>
   </div>
   <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Literaria</th>
                    <th>Literaria</th>
                    <th>Observasaun</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
               <?php 
               $literaria = mq("SELECT * FROM tb_literaria");
                $no = 1;
               while ($data = mfa($literaria)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['id_literaria']; ?></td>
                    <td><?= $data['nrn_literaria']; ?></td>
                    <td><?= $data['obs_literaria']; ?></td>
                    <td>
                        <a href="?pagina=hadiaLiteraria&id=<?= $data['id_literaria']; ?>"><i class="fa fa-edit text-primary"></i></a>
                        <a href="?pagina=hamosLiteraria&id=<?= $data['id_literaria']; ?>" onclick="return confirm('Tebes atu hamos Literaria <?= $data['nrn_literaria'] ?> ');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>