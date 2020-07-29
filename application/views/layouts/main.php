<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIMLABKOM POLITEKNIK HARAPAN BERSAMA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>

    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css'); ?>">
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo site_url('resources/js/bootstrap.min.js'); ?>"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css'); ?>">

    <link rel="stylesheet" href="<?php echo site_url('resources'); ?>/timepicker/bootstrap-timepicker.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css'); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css'); ?>">
    <script type="text/javascript" src="chartjs/Chart.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#id_kategori').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('barang/get_merk_kat'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id_merk + '>' + data[i].nm_merk + '</option>';
                        }
                        $('#id_merk').html(html);

                    }
                });
                return false;
            });

        });
    </script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <img src="<?php echo site_url('resources/img/poltek.png'); ?>" width="40" class="user-image" alt="User Image">
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b><i style="color:#0000FF">SIM</i></b><B style="color:#FF0000">LABKOM</B></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo site_url('resources/img/' . $this->session->userdata("foto")); ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata("nama"); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo site_url('resources/img/' . $this->session->userdata("foto")); ?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $this->session->userdata("nama"); ?> - <?php echo $this->session->userdata("level"); ?>
                                        <small>Since <?php echo date("M. Y", strtotime($this->session->userdata("tgl_daftar"))); ?> </small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo site_url('profil/index'); ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo site_url('resources/img/' . $this->session->userdata("foto")); ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $this->session->userdata("nama"); ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo site_url(); ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bars"></i> <span>Master Data</span>
                            <span class="pull-right-container">
                                <span class="label label-primary pull-right">8</span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('asisten/index'); ?>"><i class="fa fa-user"></i> Asisten</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('ruangan/index'); ?>"><i class="fa fa-building"></i> Ruangan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('kategori/index'); ?>"><i class="fa fa-pencil-square-o"></i> Kategori</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('merk/index'); ?>"><i class="fa fa-cube"></i> Merk</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('satuan/index'); ?>"><i class="fa fa-tasks"></i> Satuan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('barang/index'); ?>"><i class="fa fa-archive"></i> Barang</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('barang_hp/index'); ?>"><i class="fa fa-archive"></i> Barang Habis Pakai (BHP)</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('kondisi/index'); ?>"><i class="fa fa-thumbs-o-up"></i> Kondisi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('user/index'); ?>"><i class="fa fa-users"></i> Pengguna</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa  fa-th-large"></i> <span>Inventaris</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('inventaris/index'); ?>"><i class="fa fa-map-marker"></i> Cari</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('barang_masuk/index'); ?>"><i class="fa fa-arrow-circle-o-left"></i> Barang Masuk</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('barang_keluar/index'); ?>"><i class="fa fa-arrow-circle-o-right"></i> Barang Keluar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-stethoscope"></i> <span>Penanganan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('riwayat_perbaikan/index'); ?>"><i class="fa  fa-medkit"></i> Riwayat Perbaikan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('perawatan/add'); ?>"><i class="fa  fa-medkit"></i> Perawatan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('perbaikan/index'); ?>"><i class="fa fa-wrench"></i> Perbaikan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-desktop"></i> <span>Peminjaman</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('peminjaman/index'); ?>"><i class="fa fa-clipboard"></i>
                                    Peminjaman Barang</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('pengembalian/index'); ?>"><i class="fa fa-list-ul"></i>

                                    Pengembalian Barang</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-paw"></i> <span>Temuan Barang</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('kehilangan/add'); ?>"><i class="fa fa-plus"></i> Tambahkan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('kehilangan/index'); ?>"><i class="fa fa-list-ul"></i> Daftar Temuan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-calendar"></i> <span>jadwal Asisten</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('jadwal/add'); ?>"><i class="fa fa-plus"></i> Tambahkan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('jadwal/index'); ?>"><i class="fa fa-list-ul"></i> Lihat Jadwal</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('jadwal/lembur'); ?>"><i class="fa fa-list-ul"></i> Lemburan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-print"></i> <span>Laporan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('barang/cetak'); ?>"><i class="fa fa-print"></i> Barang</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('barang_hp/cetak'); ?>"><i class="fa fa-print"></i> Barang Habis Pakai (BHP)</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('inventaris/cetak'); ?>"><i class="fa fa-print"></i> Inventaris Barang</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('peminjaman/cetak'); ?>"><i class="fa fa-print"></i> Peminjaman Barang</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('kehilangan/cetak'); ?>"><i class="fa fa-print"></i> Kehilangan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('jadwal/cetaklembur'); ?>" target="_blank"><i class="fa fa-print"></i> Jadwal Lemburan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('jadwal/kegiatan'); ?>" target="_blank"><i class="fa fa-print"></i> Rincian Kegiatan Lemburan</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('jadwal/rekap'); ?>" target="_blank"><i class="fa fa-print"></i> Rekap Lemburan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-info"></i> <span>Tools</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="<?php echo site_url('import/index'); ?>"><i class="fa fa-print"></i> Import Barang</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-info"></i> <span>Tentang Aplikasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-question"></i> <span>Bantuan</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <?php
                if (isset($_view) && $_view)
                    $this->load->view($_view);
                ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Powered By <a href="http://www.poltektegal.ac.id/" target="_BLANK">Politeknik harapan Bersama</a> 2020</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->

            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- FastClick -->
    <script src="<?php echo site_url('resources/js/fastclick.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo site_url('resources/js/app.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo site_url('resources/js/demo.js'); ?>"></script>
    <!-- DatePicker -->
    <script src="<?php echo site_url('resources/js/moment.js'); ?>"></script>
    <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script src="<?php echo site_url('resources/js/global.js'); ?>"></script>
    <script src="<?php echo site_url('resources'); ?>/timepicker/bootstrap-timepicker.min.js"></script>

    <script>
        $(document).ready(function() {
            var url = window.location;
            var element = $('ul.sidebar-menu a').filter(function() {
                return this.href == url || url.href.indexOf(this.href) == 0;
            }).parent().addClass('active');
            if (element.is('li')) {
                element.addClass('active').parent().parent('li').addClass('active')
            }
        });
    </script>

</body>

</html>