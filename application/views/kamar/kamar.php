                   <!-- Begin Page Content -->
                   <div class="container-fluid">
<!-- Page Heading -->


			<section class="page-section bg-light" id="team">
				<div class="card shadow mb-4">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Data Kamar</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <h5><a href="<?= base_url('index.php/kamar/tambah_kamar')?>">
                            <button class="btn btn-sm btn-info float-right" type=""><i class="fas fa_plus fa-sm">Tambah Data Kamar</i></button></a></h5>
                            </div>
                            <div>
                             <div class="card-body">
                             <div class="table-responsive">
                              <table class="table table-bordered text-center"  id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                               
                                            <th>id kamar</th>
                                            <th>nomor kamar</th>
                                            <th>id jenis</th>
                                            <th>keterangan</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                </thead>
                                <tbody>


                                    <?php 
                                        $id = 1;
                                        foreach($tbl_kamar as $tk):
                                    ?>
                                    <tr>
                                        <td><?php echo $id++; ?></td>
                                        <td><?php echo $tk ["nomor_kamar"]?></td>
                                        <td><?php echo $tk ["id_jenis"]?></td>
                                        <td><?php echo $tk ["keterangan"]?></td>
                                        <td>
                                            <a href="<?= base_url('index.php/kamar/update_kamar/')?><?php echo $tk['id_kamar']?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> </a>
                                            <a href="<?= base_url('index.php/kamar/hapus_kamar/')?><?php echo $tk['id_kamar']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
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