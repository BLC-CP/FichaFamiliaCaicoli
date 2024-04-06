<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
       <a href="?pagina=aumentaRelfam" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Aumenta Dadus</a>
       <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> <?= $titulu; ?></a>
   </div>
   <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Relasaun Familia</th>
                    <th>Relasaun Familia</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
               <?php 
               $rel_fam = mq("SELECT * FROM tb_rel_fam");
                $no = 1;
               while ($data = mfa($rel_fam)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['id_rel_fam']; ?></td>
                    <td><?= $data['nrn_rel_fam']; ?></td>
                    <td>
                        <a href="?pagina=hadiaRelfam&id=<?= $data['id_rel_fam']; ?>"><i class="fa fa-edit text-primary"></i></a>
                        <a href="?pagina=hamosRelfam&id=<?= $data['id_rel_fam']; ?>" onclick="return confirm('Tebes atu hamos Relfam <?= $data['nrn_rel_fam'] ?> ');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>