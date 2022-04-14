<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heding text-uppercase" >Profile</h2>
                <h3 class="section-subheading text-muted" >Selamat Datang Di Hotel Elsa</h3>
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td class="text-start" width="15%">Email</td>
                            <td>:</td>
                            <td class="text-start"><?= $user['email']?></td>
                        </tr>
                        <tr>
                            <td class="text-start">Nama Lengkap</td>
                            <td>:</td>
                            <td class="text-start"><?= $user['nama_lengkap']?></td>
                        </tr>
                        <tr>
                            <td class="text-start">No Hp</td>
                            <td>:</td>
                            <td class="text-start"><?= $user['no_hp']?></td>
                        </tr>
                    </tbody>
                </table>
                Klik <a href="<?= base_url('index.php/profile/update_profile')?>"> DISINI </a> Untuk Update Profile Anda <br>
                Klik <a href="<?= base_url('index.php/profile/ganti_password')?>"> DISINI </a> Mengganti Password Anda <br>
            </div>
        </div>
    </div>
</section>