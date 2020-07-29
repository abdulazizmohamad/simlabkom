<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?php echo $barang ?></h3>

            <p>BARANG</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php echo site_url('barang/index'); ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $ruangan ?></h3>

            <p>RUANGAN</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo site_url('ruangan/index'); ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?php echo $kehilangan ?></h3>

            <p>TEMUAN BARANG</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo site_url('kehilangan/index'); ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?php echo $peminjaman ?></h3>

            <p>ALAT DI PINJAM</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="<?php echo site_url('peminjaman/index'); ?>" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
  <div class="col-md-12">
    <div class="box box-danger">
      <div class="box-header with-border">
        <h3 class="box-title">Asisten Laboratorium</h3>

        <div class="box-tools pull-right">
          <span class="label label-danger">
            <?php $x = 0;
            foreach ($asisten as $a) {
              $x += 1;
            }
            echo $x . " Anggota" ?></span>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body padding">
        <?php foreach ($asisten as $t) { ?>
          <div class="col-lg-2">
            <img class="img img-circle" src="<?php echo site_url('resources/img/' . $t['img']); ?>" height="80" width="80">
            <a class="users-list-name" href="#"><?php echo $t['nm_asisten']; ?></a>
            <span class="users-list-date"><?php echo $t['telp_asisten']; ?></span>
          </div>
        <?php } ?>
        <!-- /.users-list -->
      </div>
      <div class="box-footer text-center">
        <?php if ($this->session->userdata("level") == 'admin') { ?>
          <a href="<?php echo site_url('asisten/index'); ?>" class="uppercase">View All Users</a>
        <?php } ?>
      </div>
      <!-- /.box-footer -->
    </div>
  </div>
  <!-- BAR CHART -->
  <div class="col-md-12">

  </div>
</div>