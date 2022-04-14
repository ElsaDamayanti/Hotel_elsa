<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <h2 class="h3 mb-0 text-widt-200 fas fa-user-tie">ganti password</h2>
                <h6 class="section-subheading text-muted" >Selamat Datang Di Hotel Elsa</h6>
                <form action="<?= base_url('index.php/user/proses_ganti_password')?>" method="post">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">Email</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="text" name="email" value="<?= $user['email'] ?>"readonly></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">password</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="password" name="password1" value="<?= $user['password'] ?>"></td>
                        </tr>
                        <tr>
                            <td class="text-start" width="15%">ulangi password</td>
                            <td>:</td>
                            <td class="text-start"><input class="form-control" type="password" name="password2" value="<?= $user['password'] ?>" ></td>
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