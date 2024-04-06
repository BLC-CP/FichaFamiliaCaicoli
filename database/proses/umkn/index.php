<div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
     <a href="?pagina=aumentaUmkn" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Aumenta Dadus</a>
     <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> <?= $titulu; ?></a>
 </div>
 <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Uma Kain</th>
                    <th>Chefe Familia</th>
                    <th>Aldeia</th>
                    <th>Profisaun</th>
                    <th>Religiaun</th>
                    <th>Estaadu Civil</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
                 <?php
               $umkn = mq("SELECT * FROM tb_umkn, tb_populasaun, tb_aldeia, tb_profisaun, tb_religiaun, tb_estadu_civil WHERE 

                tb_umkn.id_populasaun=tb_populasaun.id_populasaun AND
                tb_populasaun.id_aldeia=tb_aldeia.id_aldeia AND
                tb_populasaun.id_profisaun=tb_profisaun.id_profisaun AND
                tb_populasaun.id_religiaun=tb_religiaun.id_religiaun AND
                tb_populasaun.id_estadu_civil=tb_estadu_civil.id_estadu_civil 

                ");
               while ($data = mfa($umkn)) {
                $no = 1;
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['id_umkn'] ?></td>
                    <td><?= $data['nrn_populasaun'] ?></td>
                    <td><?= $data['nrn_aldeia'] ?></td>
                    <td><?= $data['nrn_profisaun'] ?></td>
                    <td><?= $data['nrn_religiaun'] ?></td>
                    <td><?= $data['nrn_estadu_civil'] ?></td>
                    <td>
                        <a href="?pagina=hadiaUmkn&id=<?= $data['id_umkn']; ?>"><i class="fa fa-edit text-primary" title="Hadia dadus uma kain"></i></a>
                        <a href="?pagina=aumeUmkn&id=<?= $data['id_umkn']; ?>"><i class="fa fa-plus text-success" title="Aumenta membru uma kain"></i></a>
                        <a href="?pagina=hamosUmkn&id=<?= $data['id_umkn']; ?>" title="Hamos dadus uma kain"><i class="fa fa-trash text-danger" onclick="return confirm('Tebes atu hamos Umkn <?= $data['nrn_umkn'] ?> ');"></i></a>
                        <a href="?pagina=detail&id=<?= $data['id_umkn'] ?>"><i class="fa fa-info text-warning"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>