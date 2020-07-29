
<div class="col-md-3">
    <!-- Profile Image -->
    <div class="box box-primary">
        <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="<?php echo site_url('resources/img/' . $this->session->userdata('foto')); ?>" alt="User profile picture">

            <h3 class="profile-username text-center"><?php echo $this->session->userdata('nama') ?></h3>

            <p class="text-muted text-center">
                <?php echo $this->session->userdata('level') ?>
            </p>

            <ul class="list-group list-group-unbordered">
                <li class="list-group-item" style="text-align:center">
                    <b>Username</b><br><a><?php echo $this->session->userdata('username') ?></a>
                </li>
                <li class="list-group-item" style="text-align:center">
                    <b>Tanggal Daftar</b><br><a><?php echo date("d-M-Y",strtotime($this->session->userdata('tgl_daftar'))) ?></a>
                </li>
                <li class="list-group-item" style="text-align:center">
                <a href="<?php echo site_url('user/edit/' . $this->session->userdata('id_user')) ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit Profil</a>
            </li>
            </ul>
        </div>
    </div>
</div>