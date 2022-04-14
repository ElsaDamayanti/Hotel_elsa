<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah jenis kamar</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Data jenis kamar</h1>


	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/jenis_kamar/proses_tambah_jenis_kamar')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>kamar : </label>
                            <input type="text" name="kamar" id="kamar" class="form-control">
						</div>
						<div class="form-group col-lg-12">
							<label>Harga : </label>
                            <input name="harga" id="harga"  class="form-control"></input>
						</div>
						<div class="form-group col-lg-12">
							<label>Keterangan : </label>
                            <textarea type="text" name="keterangan" id="keterangan" class="form-control"></textarea>	
						</div>
						<div class="form-group">
						<label>Foto</label>
							<input type="file" name="gambar" class="form-control"
							size="20">
						</div>
					

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
				</div>
			</div>
			</div>
			<br>
			<br>
		</div>
		</div>
	</div>
	</div>
</div>
	
