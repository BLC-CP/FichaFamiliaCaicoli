<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Total Dadus Familia</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <h3><?php 

                            $dd = mnr(mq("SELECT * FROM tb_umkn"));
                            echo $dd;

                         ?></h3>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    Total Dadus Populasaun</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <h3>
                            <?php 

                            $cc = mnr(mq("SELECT * FROM tb_populasaun"));
                            echo $cc;

                         ?>
                        </h3>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>