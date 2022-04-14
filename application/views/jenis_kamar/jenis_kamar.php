<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->


			<section class="page-section bg-light" id="team">
				<div class="card shadow mb-4">
                    <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-info">Data jenis_kamar</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <h5><a href="<?= base_url('index.php/jenis_kamar/tambah_jenis_kamar')?>">
                            <button class="btn btn-sm btn-info float-right" type=""><i class="fas fa_plus fa-sm">Tambah Data jenis_kamar</i></button></a></h5>
                            </div>
                            <div>
                             <div class="card-body">
                             <div class="table-responsive">
                              <table class="table table-bordered text-center"  id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                               
                                            
                                            <th>Id Jenis</th>
                                            <th>Kamar</th>
                                            <th>harga</th>
                                            <th>keterangan</th>
                                            <th>Foto</th>
                                            <th style="width: 125px;">action</th>
                                        </tr>
                                </thead>
                                <tbody>


                                    <?php 
                                        $id = 1;
                                        foreach($tbl_jenis_kamar as $jk):
                                    ?>
                                    <tr>
                                    <td><?php echo $id++; ?></td>
                                        <td><?php echo $jk ["kamar"]?></td>
                                        <td><?php echo $jk ["harga"]?></td>
                                        <td><?php echo $jk ["keterangan"]?></td>
                                        <td><img src="<?php echo base_url().'/userfile/' . $jk ["foto"]; ?>" widht="50"></td>
                                     
                                        <td>
                                            <a href="<?= base_url('index.php/jenis_kamar/update_jenis_kamar/')?><?php echo $jk['id_jenis']?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> </a>
                                            <a href="<?= base_url('index.php/jenis_kamar/hapus_jenis_kamar/')?><?php echo $jk['id_jenis']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a>
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
