<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heding text-uppercase" >ganti password</h2>
                <h3 class="section-subheading text-muted" >Selamat Datang Di Hotel Elsa</h3>
                <form action="<?= base_url('index.php/profile/proses_ganti_password')?>" method="post">
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
                            <td colspan="3"><button type="submit" class="btn btn-primary">update</butoon>
                           </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>