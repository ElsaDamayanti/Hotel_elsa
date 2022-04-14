<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->


<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="h3 mb-0 text-widt-200 fas fa-user-tie">Update User</h2>
                    <h6 class="section-subheading text-muted" >Selamat Datang Di Hotel Elsa</h6>
                <form action="<?= base_url('index.php/user/proses_update_user')?>" method="post">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">Email</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" name="email" value="<?= $user['email'] ?>"readonly></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">Nama Lengkap</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" name="nama_lengkap" value="<?= $user['nama_lengkap'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">No Hp</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" name="no_hp" value="<?= $user['no_hp'] ?>" ></td>
                        </tr>
                        <tr>
                            <td colspan="3"><button type="submit" class="btn btn-info">update</butoon>
                           </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>

</section>
</div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->