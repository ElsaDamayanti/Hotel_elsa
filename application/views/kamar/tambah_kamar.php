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
					<form method="post" action="<?=base_url('index.php/kamar/proses_tambah_kamar')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Nomor Kamar : </label>
                            <input type="text" name="nomor_kamar" id="nomor_kamar" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Id Jenis : </label>
                            <input type="text" name="id_jenis" id="id_jenis" class="form-control">	
						</div>
						<div class="form-group col-lg-12">
							<label>Keterangan : </label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="4" class="form-control"></textarea>
						</div>
					

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
				</div>
			</div>
			<br>
			<br>
		</div>

	</div>
	</div>
</div>
	
