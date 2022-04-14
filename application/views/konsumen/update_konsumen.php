<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Update Data konsumen</h4>
                        <br>
                        <form action="<?=base_url('index.php/konsumen/proses_update_konsumen')?>" method="POST">
                            <input type="hidden" name="id_konsumen" id="id_konsumen" value="<?php echo $tbl_konsumen['id_konsumen']?>">
                            <table class="table">
                                <tr>
                                    <td>Nama Depan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_depan" id="nama_depan" value="<?php echo $tbl_konsumen['nama_depan']?>"></td>
								</tr>
								<tr>
      								<td>Nama Tengah</td>
     								 <td>:</td>
     								 <td><input type="text"  class="form-control" name="nama_tengah" id="nama_tengah" value="<?php echo $tbl_konsumen['nama_belakang']?>"></td>
 								 </tr>
                                <tr>
                                    <td>Nama Belakang</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="nama_belakang" id="nama_belakang" cols="10" rows="6" ><?php echo $tbl_konsumen['nama_belakang']?></textarea></td>
                                </tr>
                                  <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="alamat" id="alamat" cols="10" rows="6" ><?php echo $tbl_konsumen['alamat']?></textarea></td>
                                </tr>
                                  <tr>
                                    <td>Kota</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="kota" id="kota" cols="10" rows="6" ><?php echo $tbl_konsumen['kota']?></textarea></td>
                                </tr>
                                  <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="provinsi" id="provinsi" cols="10" rows="6" ><?php echo $tbl_konsumen['provinsi']?></textarea></td>
                                </tr>
                                  <tr>
                                    <td>Negara</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="negara" id="negara" cols="10" rows="6" ><?php echo $tbl_konsumen['negara']?></textarea></td>
                                </tr>
                                  <tr>
                                    <td>No Identitas</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="no_identitas" id="no_identitas" cols="10" rows="6" ><?php echo $tbl_konsumen['no_identitas']?></textarea></td>
                                  </tr>
                                <tr>
                                    <td>No Telphone</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="no_telp" id="no_telp" cols="10" rows="6" ><?php echo $tbl_konsumen['no_telp']?></textarea></td>
                                  </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="email" id="email" cols="10" rows="6" ><?php echo $tbl_konsumen['email']?></textarea></td>
                                  </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info
                                        " value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>