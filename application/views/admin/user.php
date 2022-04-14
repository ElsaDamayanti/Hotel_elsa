<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->


			<section class="page-section bg-light" id="team">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
						<h2 class="h3 mb-0 text-widt-200 fas fa-user-tie">Profile User</h2>
							<table class="table table-bordered table-hover">
								<tbody>
									<tr>
										<td class="text-start" widht="15%" >Email</td>
										<td>:</td>
										<td class="text-start"><?=$user['email']?></td>
									</tr>
									<tr>
										<td class="text-start" >Nama lengkap</td>
										<td>:</td>
										<td class="text-start"><?=$user['nama_lengkap']?></td>
									</tr>
									<tr>
										<td class="text-start" >No hp</td>
										<td>:</td>
										<td class="text-start"><?=$user['no_hp']?></td>
									</tr>
								</tbody>
							</table>
							Klik <a href="<?= base_url('index.php/user/update_user')?>">disini</a>untuk update user anda<br>

							Klik <a href="<?= base_url('index.php/user/ganti_password')?>">disini</a>untuk mengganti password anda<br>
							
							</div>
						</div>
					</div>
			</section>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->