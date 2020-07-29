<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Laboratorium Komputer | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('resources/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('resources/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- Theme style -->
    <link href="<?php echo base_url('resources/css/AdminLTE.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('resources/css/login.css'); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('resources/js/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet">

</head>

<body>

    <div class="container">
        <div class="wrapper">
            <form class="form-signin" action="<?php echo site_url('login/proses'); ?>" method="POST">
                <h3 class="form-signin-heading">

                    <img src="https://poltektegal.ac.id/v2012/wp-content/uploads/2019/01/Logo-Politeknik-Harapan-Bersama-Tegal.png" style="width:100px;height:105px" alt="Alternate Text" />
                    <br />
                    <b style="color:#0000FF">SIM</b><b style="color:#FF0000">LABKOM</b>
                </h3>

                <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" /><br />
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />

                <button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">Login</button>
            </form>
        </div>
    </div>

    <script src="<?php echo base_url('resources/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('resources/js/bootstrap.min.js'); ?>"></script>
</body>

</html>