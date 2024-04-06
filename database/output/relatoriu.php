<div class="col-md-6">
    <form method="POST" action="rel/reldtl/relkadaumkn.php" 
    target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
    <table  class="table table-sm table-bordered table-striped">
        <tr>
            <td colspan="2">
                RELATORIO KADA UMA KAIN
            </td>
        </tr>
        <tr>
            <td width="90%">
                <select class="form-control form-control-sm select2" name="id_umkn" style="width: 100%;" required>
                    <?php
                    $a=$conn->query("SELECT * FROM tb_umkn, tb_populasaun WHERE
                        tb_umkn.id_populasaun=tb_populasaun.id_populasaun

                        ");
                    while($r=$a->fetch_array()){

                        ?>
                        <option value="<?php echo $r['id_umkn']; ?>">
                            <?php echo $r['nrn_populasaun']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
            <td>
                <button type="submit" name="submit" class="btn btn-info btn-sm">Buka</button>
            </td>
        </tr>
    </table>
</form>
</div>
<!-- 
<div class="col-md-6">
        <form method="POST" action="rel/relkadaperiodo.php" 
        target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
        <table  class="table table-sm table-bordered table-striped">
            <tr>
                <td colspan="3">
                    RELATORIO KADA PERIODO
                </td>
            </tr>
            <tr>
                <td width="90%">
                    <input type="date" name="from" class="form-control form-control-sm">
                </td>
                <td>
                     <input type="date" name="to" class="form-control form-control-sm">
                </td>
                <td>
                    <button type="submit" name="submit" class="btn btn-info btn-sm">Buka</button>
                </td>
            </tr>
        </table>
    </form>
</div> -->

 <div class="col-md-12">
        <iframe src="rel/reldtl/rels.php" name="my-iframe" width="100%" height="600">
        </iframe>
    </div>