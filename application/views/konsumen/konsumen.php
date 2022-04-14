
                       <!-- Begin Page Content -->
                       <div class="container-fluid">
<!-- Page Heading -->


			<section class="page-section bg-light" id="team">
				<div class="card shadow mb-4">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Data konsumen</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <h5><a href="<?= base_url('index.php/konsumen/tambah_konsumen')?>">
                            <button class="btn btn-sm btn-info float-right" type=""><i class="fas fa_plus fa-sm">Tambah Data konsumen</i></button></a></h5>
                            </div>
                            <div>
                             <div class="card-body">
                             <div class="table-responsive">
                              <table class="table table-bordered text-center"  id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Depan</th>
                                        <th>Nama Tengah</th>
                                        <th>Nama Belakang</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th>
                                        <th>Negara</th>
                                        <th>No Identitas</th>
                                        <th>No Telpon</th>
                                        <th>Email</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                               <tbody>
                                    <?php 
                                        $no = 1;
                                        foreach($tbl_konsumen as $tk):?>
                                    <tr>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $tk ["nama_depan"]?></td>
                                        <td><?php echo $tk ["nama_tengah"]?></td>
                                        <td><?php echo $tk ["nama_belakang"]?></td>
                                        <td><?php echo $tk ["alamat"]?></td>
                                        <td><?php echo $tk ["kota"]?></td>
                                        <td><?php echo $tk ["provinsi"]?></td>
                                        <td><?php echo $tk ["negara"]?></td>
                                        <td><?php echo $tk ["no_identitas"]?></td>
                                        <td><?php echo $tk ["no_telp"]?></td>
                                        <td><?php echo $tk ["email"]?></td>
                                        <td>
                                           <a href="<?= base_url('index.php/konsumen/update_konsumen/')?><?php echo $tk['id_konsumen']?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> </a>
                                           <a href="<?= base_url('index.php/konsumen/hapus_konsumen/')?><?php echo $tk['id_konsumen']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
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