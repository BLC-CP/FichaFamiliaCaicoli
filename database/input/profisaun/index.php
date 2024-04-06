<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
       <a href="?pagina=aumentaProfisaun" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Aumenta Dadus</a>
       <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> <?= $titulu; ?></a>
   </div>
   <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Profisaun</th>
                    <th>Profisaun</th>
                    <th>Observasaun</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
               <?php 
               $profisaun = mq("SELECT * FROM tb_profisaun");
                $no = 1;
               while ($data = mfa($profisaun)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['id_profisaun']; ?></td>
                    <td><?= $data['nrn_profisaun']; ?></td>
                    <td><?= $data['obs_profisaun']; ?></td>
                    <td>
                        <a href="?pagina=hadiaProfisaun&id=<?= $data['id_profisaun']; ?>"><i class="fa fa-edit text-primary"></i></a>
                        <a href="?pagina=hamosProfisaun&id=<?= $data['id_profisaun']; ?>" onclick="return confirm('Tebes atu hamos Profisaun <?= $data['nrn_profisaun'] ?> ');"><i class="fa fa-trash text-danger"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
</div>