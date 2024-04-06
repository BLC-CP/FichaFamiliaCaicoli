<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
       <a href="?pagina=aumentaAldeia" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Aumenta Dadus</a>
       <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> <?= $titulu; ?></a>
   </div>
   <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Aldeia</th>
                    <th>Aldeia</th>
                    <th>Observasaun</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
               <?php 
               $aldeia = mq("SELECT * FROM tb_aldeia");
                $no = 1;
               while ($data = mfa($aldeia)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['id_aldeia']; ?></td>
                    <td><?= $data['nrn_aldeia']; ?></td>
                    <td><?= $data['obs_aldeia']; ?></td>
                    <td>
                        <a href="?pagina=hadiaAldeia&id=<?= $data['id_aldeia']; ?>"><i class="fa fa-edit text-primary"></i></a>
                        <a href="?pagina=hamosAldeia&id=<?= $data['id_aldeia']; ?>" onclick="return confirm('Tebes atu hamos Aldeia <?= $data['nrn_aldeia'] ?> ');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>