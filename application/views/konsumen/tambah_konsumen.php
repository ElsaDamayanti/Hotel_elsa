<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah kamar</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Data kamar</h1>


	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/konsumen/proses_tambah_konsumen')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Id Konsumen : </label>
                            <input type="text" name="id_konsumen" id="id_konsumen" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Nama Depan : </label>
                            <input type="text" name="nama_depan" id="nama_depan" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Nama_tengah : </label>
                            <input type="text" name="nama_tengah" id="nama_tengah" class="form-control">	
						</div>
						<div class="form-group col-lg-12">
							<label>Nama belakang : </label>
                            <textarea name="nama_belakang" id="nama_belakang" cols="30" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat : </label>
							<textarea name="alamat" id="alamat" cols="30" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group col-lg-12">
							<label>Kota : </label>
							<textarea name="kota" id="kota" cols="30" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group col-lg-12">
							<label>Provinsi : </label>
							<textarea name="provinsi" id="provinsi" cols="30" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group col-lg-12">
							<label>Negara : </label>
							<textarea name="negara" id="negara" cols="30" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group col-lg-12">
							<label>No Identitas : </label>
							<textarea name="no_identitas" id="no_identitas" cols="30" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group col-lg-12">
							<label>No Telphone : </label>
							<textarea name="no_telp" id="no_telp" cols="30" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group col-lg-12">
							<label>Email : </label>
							<textarea name="email" id="email" cols="30" rows="4" class="form-control"></textarea>
						</div>
						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
						</form>
				</div>
			</div>
			<br>
			<br>
		</div>

	</div>

</div>
	
