<div class="col-md-3">
    <form method="POST" action="rel/relkadaaldeia.php" 
    target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
    <table  class="table table-sm table-bordered table-striped">
        <tr>
            <td colspan="2">
                RELATORIO KADA ALDEIA
            </td>
        </tr>
        <tr>
            <td width="90%">
                <select class="form-control form-control-sm select2" name="id_aldeia" style="width: 100%;" required>
                    <?php
                    $a=$conn->query("SELECT * FROM tb_aldeia");
                    while($r=$a->fetch_array()){

                        ?>
                        <option value="<?php echo $r['id_aldeia']; ?>">
                            <?php echo $r['nrn_aldeia']; ?>
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

<div class="col-md-3">
    <form method="POST" action="rel/relkadaprofisaun.php" 
    target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
    <table  class="table table-sm table-bordered table-striped">
        <tr>
            <td colspan="2">
                RELATORIO KADA PROFISAUN
            </td>
        </tr>
        <tr>
            <td width="90%">
                <select class="form-control form-control-sm select2" name="id_profisaun" style="width: 100%;" required>
                    <?php
                    $a=$conn->query("SELECT * FROM tb_profisaun");
                    while($r=$a->fetch_array()){

                        ?>
                        <option value="<?php echo $r['id_profisaun']; ?>">
                            <?php echo $r['nrn_profisaun']; ?>
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

<div class="col-md-3">
    <form method="POST" action="rel/relkadaliteraria.php" 
    target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
    <table  class="table table-sm table-bordered table-striped">
        <tr>
            <td colspan="2">
                RELATORIO KADA LITERARIA
            </td>
        </tr>
        <tr>
            <td width="90%">
                <select class="form-control form-control-sm select2" name="id_literaria" style="width: 100%;" required>
                    <?php
                    $a=$conn->query("SELECT * FROM tb_literaria");
                    while($r=$a->fetch_array()){

                        ?>
                        <option value="<?php echo $r['id_literaria']; ?>">
                            <?php echo $r['nrn_literaria']; ?>
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


<div class="col-md-3">
    <form method="POST" action="rel/relkadareligiaun.php" 
    target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
    <table  class="table table-sm table-bordered table-striped">
        <tr>
            <td colspan="2">
                RELATORIO KADA RELIGIAUN
            </td>
        </tr>
        <tr>
            <td width="90%">
                <select class="form-control form-control-sm select2" name="id_religiaun" style="width: 100%;" required>
                    <?php
                    $a=$conn->query("SELECT * FROM tb_religiaun");
                    while($r=$a->fetch_array()){

                        ?>
                        <option value="<?php echo $r['id_religiaun']; ?>">
                            <?php echo $r['nrn_religiaun']; ?>
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


<div class="col-md-2">
    <form method="POST" action="rel/relkadaestadu.php" 
    target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
    <table  class="table table-sm table-bordered table-striped">
        <tr>
            <td colspan="2">
                RELATORIO KADA ESTADU CIVIL
            </td>
        </tr>
        <tr>
            <td width="90%">
                <select class="form-control form-control-sm select2" name="id_estadu_civil" style="width: 100%;" required>
                    <?php
                    $a=$conn->query("SELECT * FROM tb_estadu_civil");
                    while($r=$a->fetch_array()){

                        ?>
                        <option value="<?php echo $r['id_estadu_civil']; ?>">
                            <?php echo $r['nrn_estadu_civil']; ?>
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

<div class="col-md-3">
        <table  class="table table-sm table-bordered table-striped">
            <tr>
                <td colspan="2">
                    RELATORIO KOMUNIDADE KADA FULAN
                </td>
            </tr>
            <tr>
                <td width="70%">
                    <form method="POST" target="my-iframe" action="rel/relkadafulan.php" 
                    class="form-horizontal" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-5">
                            <select class="form-control form-control-sm select2" name="tinan" 
                            style="width: 100%;" required name="bulan">
                            <?php
                            $mulai= date('Y') - 6;
                            for($i = $mulai;$i<$mulai + 7;$i++){
                                $sel = $i == date('Y') ? ' selected="selected"' : '';
                                echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                            }
                            ?>
                        </select>
                    </div>        
                    <div class="col-md-5">
                       <select class="form-control form-control-sm select2" name="fulan"
                       style="width: 100%;" required>
                       <option value="01">Januari</option>
                       <option value="02">Februari</option>
                       <option value="03">Maret</option>
                       <option value="04">April</option>
                       <option value="05">Mei</option>
                       <option value="06">Juni</option>
                       <option value="07">Juli</option>
                       <option value="08">Agustus</option>
                       <option value="09">September</option>
                       <option value="10">Oktober</option>
                       <option value="11">November</option>
                       <option value="12">Desember</option>
                   </select>
               </div>
                   <button type="submit" name="submit" class="btn btn-info btn-sm">Buka</button>
           </div>


       </form>
   </td>
</tr>
</table>
</div>

<div class="col-md-3"> 
    <form method="POST" target="my-iframe" action="rel/relkadatinan.php" 
    class="form-horizontal" enctype="multipart/form-data">
    <table  class="table table-sm table-bordered table-striped">

        <tr>
            <td colspan="2">
               RELATORIO KOMUNIDADE KADA TINAN
           </td>
       </tr>

       <tr>
        <td width="90%">
         <select class="form-control form-control-sm select2" name="tinan" 
         style="width: 100%;" required name="bulan">
         <?php
         $mulai= date('Y') - 6;
         for($i = $mulai;$i<$mulai + 7;$i++){
            $sel = $i == date('Y') ? ' selected="selected"' : '';
            echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
        }
        ?>
    </select> 
</td>
<td>
    <button type="submit" name="submit" class="btn btn-info btn-sm">Buka</button>
</td>
</tr>

</table>
</form>
</div>

<div class="col-md-3">
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
</div>

 <div class="col-md-12">
        <iframe src="rel/rel.php" name="my-iframe" width="100%" height="600">
        </iframe>
    </div>