                   <!-- Begin Page Content -->
                   <div class="container-fluid">
<!-- Page Heading -->


			<section class="page-section bg-light" id="team">
				<div class="card shadow mb-4">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Data transaksi</h6>
                        </div>
                            <div>
                             <div class="card-body">
                             <div class="table-responsive">
                              <table class="table table-bordered text-center"  id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                               
                                            <th>No KTP</th>
                                            <th>Nama</th>
                                            <th>Alamat </th>
                                            <th>Nomor Handphone</th>
                                            <th>Jenis Kamar</th>
                                            <th>Nomor Kamar </th>
                                            <th>Tanggal Masuk </th>
                                            <th>Tanggal Keluar</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                </thead>
                                <tbody>


                                    <?php 
                                       
                                        foreach($tbl_pesan_kamar as $tp):
                                    ?>
                                    <tr>
                                       
                                        <td><?php echo $tp ["no_ktp"]?></td>
                                        <td><?php echo $tp ["nama"]?></td>
                                        <td><?php echo $tp ["alamat"]?></td>
                                        <td><?php echo $tp ["no_hp"]?></td>
                                        <td><?php echo $tp ["jenis_kamar"]?></td>
                                        <td><?php echo $tp ["no_kamar"]?></td>
                                        <td><?php echo $tp ["tanggal_masuk"]?></td>
                                        <td><?php echo $tp ["tanggal_keluar"]?></td>

                                        <td>
                                            <a href="<?= base_url('index.php/transaksi/update_transaksi/')?><?php echo $tp['no_ktp']?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> </a>
                                            <a href="<?= base_url('index.php/transaksi/hapus_transaksi/')?><?php echo $tp['no_ktp']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
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