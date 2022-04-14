<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Update Data Transaksi</h4>
                        <br>
                        <form action="<?=base_url('index.php/transaksi/proses_update_transaksi')?>" method="POST">
                            <input type="hidden" name="no_ktp" id="no_ktp" value="<?php echo $tbl_transaksi['no_ktp']?>">
                            <table class="table">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama" id="nama" value="<?php echo $tbl_transaksi['nama']?>"></td>
								</tr>
								<tr>
      								<td>Alamat</td>
     								 <td>:</td>
     								 <td><input type="text"  class="form-control" name="alamat" id="alamat" value="<?php echo $tbl_transaksi['alamat']?>"></td>
 								 </tr>
                                <tr>
                                    <td>Nomor Handphone</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_hp" id="no_hp" value="<?php echo $tbl_transaksi['no_hp']?>"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kamar</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jenis_kamar" id="jenis_kamar" value="<?php echo $tbl_transaksi['jenis_kamar']?>"></td>
                                </tr>
                                <tr>
                                    <td>Nomor Kamar</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_kamar" id="no_kamar" value="<?php echo $tbl_transaksi['no_kamar']?>"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tanggal_masuk" id="tanggal_masuk" value="<?php echo $tbl_transaksi['tanggal_masuk']?>"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Keluar</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tanggal_keluar" id="tanggal_keluar" value="<?php echo $tbl_transaksi['tanggal_keluar']?>"></td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-info" value="Update">
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