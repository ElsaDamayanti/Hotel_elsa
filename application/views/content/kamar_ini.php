<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heding text-uppercase" >Pesan Kamar</h2>
                <h3 class="section-subheading text-muted" >Selamat Datang Di Hotel Elsa</h3>
                <form action="<?= base_url('index.php/profile/proses_pesan_kamar')?>" method="post">
                <table class="table table-bordered table-hover">
  <center><div class="col-md-4">
    <label for="validationCustom01" class="form-label">No KTP :</label>
    <input type="text" class="form-control" name="no_ktp" id="no_ktp" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Nama Lengkap :</label>
    <input type="text" class="form-control" name="nama" id="nama" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Alamat :</label>
    <div class="input-group has-validation">
    <textarea name="alamat" id="alamat" cols="20" rows="3" class="form-control"></textarea>
    </div>
  </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Nomor Handphone :</label>
      <input type="text" name="no_hp" class="form-control" id="no_hp" value="" required>
    </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Jenis Kamar :</label>
    <select class="form-select" id="jenis_kamar" name="jenis_kamar" required>
      <option selected disabled value=""></option>
      <option>Standard Room</option>
      <option>Superior Room</option>
      <option>Deluxe Room</option>
      <option>Junior Suite Room</option>
      <option>Predential Suite</option>
      <option>Suite Room</option>
    </select>
  </div>
  <div class="col-md-4">
   <label for="validationCustom05" class="form-label">Nomor Kamar :</label>
   <input type="text" class="form-control"  name="no_kamar" id="no_kamar" required>
 </div>
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Tanggal Masuk :</label>
    <input type="date" class="form-control"  name="tanggal_masuk" id="tanggal_masuk" required>
  </div>
  <div class="col-md-4">
  <label for="validationCustom05" class="form-label">Tanggal Keluar :</label>
  <input type="date" class="form-control" name="tanggal_keluar" id="tanggal_keluar" required>
</div>
<br>
<br>

  <div class="col-md-4">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

</section>