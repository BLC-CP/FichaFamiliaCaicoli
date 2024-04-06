
<div class="card-body">
    <div class="table-responsive">
        <a class="btn btn-primary btn-sm" href="?pagina=umkn">Back</a>
        <table class="table table-bordered mt-2" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Uma Kain</th>
                    <th>Naran  Membro Uma Kain</th>
                    <th>Sexo</th>
                    <th>Estadu Civil</th>
                    <th>Relasaun Familia</th>
                    <th>Aldeia</th>
                    <th>Profisaun</th>
                    <th>Religiaun</th>
                    <th>Literaria</th>
                    <th>Aksaun</th>
                </tr>
            </thead>
            <tbody>
               <?php
                $id = $_GET['id'];
               $umkn = mq("SELECT * FROM tb_dtl_umkn, tb_umkn, tb_populasaun, tb_estadu_civil, tb_rel_fam, tb_aldeia, tb_profisaun, tb_religiaun, tb_literaria WHERE 

                tb_dtl_umkn.id_umkn=tb_umkn.id_umkn AND    
                tb_dtl_umkn.id_populasaun=tb_populasaun.id_populasaun AND    
                tb_populasaun.id_estadu_civil=tb_estadu_civil.id_estadu_civil AND    
                tb_populasaun.id_rel_fam=tb_rel_fam.id_rel_fam AND    
                tb_populasaun.id_aldeia=tb_aldeia.id_aldeia AND
                tb_populasaun.id_profisaun=tb_profisaun.id_profisaun AND
                tb_populasaun.id_religiaun=tb_religiaun.id_religiaun AND
                tb_populasaun.id_literaria=tb_literaria.id_literaria AND
                tb_umkn.id_umkn = '$id'
                ");
               while ($data = mfa($umkn)) {
                $no = 1;
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['id_umkn'] ?></td>
                    <td><?= $data['nrn_populasaun'] ?></td>
                    <td><?= $data['sexo'] ?></td>
                    <td><?= $data['nrn_estadu_civil'] ?></td>
                    <td><?= $data['nrn_rel_fam'] ?></td>
                    <td><?= $data['nrn_aldeia'] ?></td>
                    <td><?= $data['nrn_profisaun'] ?></td>
                    <td><?= $data['nrn_religiaun'] ?></td>
                    <td><?= $data['nrn_literaria'] ?></td>
                    <td>
                        
                        <a href="?pagina=hadiadtlumkn&id=<?= $data['id_dtl_umkn']; ?>"><i class="fa fa-edit text-primary" title="Hadia dadus uma kain"></i></a>
                        
                        <a href="?pagina=hamosdtlumkn&id=<?= $data['id_dtl_umkn']; ?>" title="Hamos dadus uma kain"><i class="fa fa-trash text-danger" onclick="return confirm('Tebes atu hamos Umkn <?= $data['nrn_umkn'] ?> ');"></i></a>
                        
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>