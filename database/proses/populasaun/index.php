<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
     <a href="?pagina=aumentaPopulasaun" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Aumenta Dadus</a>
     <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> <?= $titulu; ?></a>
 </div>
 <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Naran</th>
                    <th>Sexo</th>
                    <th>Data Moris</th>
                    <th>Hela Fatin</th>
                    <th>Telefone</th>
                    <th>Data Registu</th>
                    <th>Relasaun Familia</th>
                    <th>Aldeia</th>
                    <th>Profisaun</th>
                    <th>Literaria</th>
                    <th>Religiaun</th>
                    <th>Estadu Civil</th>
                    <th>Foto</th>
                    <th>Observasaun</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
                 <?php
               $populasaun = mq("SELECT * FROM tb_populasaun

               JOIN tb_rel_fam ON tb_populasaun.id_rel_fam=tb_rel_fam.id_rel_fam 
               JOIN tb_estadu_civil ON tb_populasaun.id_estadu_civil=tb_estadu_civil.id_estadu_civil 
               JOIN tb_aldeia ON tb_populasaun.id_aldeia=tb_aldeia.id_aldeia 
               JOIN tb_profisaun ON tb_populasaun.id_profisaun=tb_profisaun.id_profisaun 
               JOIN tb_literaria ON tb_populasaun.id_literaria=tb_literaria.id_literaria 
               JOIN tb_religiaun ON tb_populasaun.id_religiaun=tb_religiaun.id_religiaun

                ");
               while ($data = mfa($populasaun)) {
                $no = 1;
                ?>
                <tr>
                    <td><?= $data['nrn_populasaun'] ?></td>
                    <td><?= $data['sexo'] ?></td>
                    <td><?= $data['data_moris'] ?></td>
                    <td><?= $data['hela_fatin'] ?></td>
                    <td><?= $data['telefone'] ?></td>
                    <td><?= $data['data_registu'] ?></td>
                    <td><?= $data['nrn_rel_fam'] ?></td>
                    <td><?= $data['nrn_aldeia'] ?></td>
                    <td><?= $data['nrn_profisaun'] ?></td>
                    <td><?= $data['nrn_literaria'] ?></td>
                    <td><?= $data['nrn_religiaun'] ?></td>
                    <td><?= $data['nrn_estadu_civil'] ?></td>
                    <td><img src="imgPopulasaun/<?= $data['foto'] ?>" width='55px'></td>
                    <td><?= $data['obs_populasaun'] ?></td>
                    <td>
                        <a href="?pagina=hadiaPopulasaun&id=<?= $data['id_populasaun']; ?>"><i class="fa fa-edit text-primary"></i></a>
                        <a href="?pagina=hamosPopulasaun&id=<?= $data['id_populasaun']; ?>"><i class="fa fa-trash text-danger" onclick="return confirm('Tebes atu hamos Populasaun <?= $data['nrn_populasaun'] ?> ');"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>