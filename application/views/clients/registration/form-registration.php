
<div id="heading-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h1>Form Pendaftaran Loket</h1>
			</div>
		</div>
	</div>
</div>


<div id="content">
	<div class="container">
		<section class="no-mb">
			<div class="row lead">
				<div class="col-md-12">
					<p>
						Silahkan isi form pendaftaran berikut ini dengan data yang benar.
					</p>
				</div>
			</div>
			<div class="row">
				<form id="form-pendaftaran" class="form-horizontal" role="form">
					<div class="col-md-6">

						<!-- Nama Lengkap -->
						<div class="form-group">
							<label for="nama_loket" class="col-sm-4 control-label">
								Nama Loket
							</label>
							<div class="col-sm-7">
								<input type="text" id="nama_loket" name="nama_loket" placeholder="contoh : Loket Perdana" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="no_ktp" class="col-sm-4 control-label">
								No. KTP
							</label>
							<div class="col-sm-7">
								<input type="text" id="no_ktp" name="no_ktp" placeholder="contoh : 12072xxx" class="form-control">
							</div>
						</div>

						<!-- Browse File KTP -->
						<div class="form-group">
							<label for="file_ktp" class="col-sm-4 control-label">
								Upload File KTP
							</label>
							<div class="col-sm-7">
								<input type="file" id="file_ktp" name="file_ktp">
								<img id="imgFileKTP" src="#" class="hide" alt="Preview File KTP" style="width:260px; height:100px;">
								<span class="help-block">
									<i class="text-info">Ukuran maksimum file 200MB</i>
								</span>
							</div>
						</div>

						<!-- Nomor NPWP -->
						<div class="form-group">
							<label for="no_npwp" class="col-sm-4 control-label">
								No. NPWP (Opsional)
							</label>
							<div class="col-sm-7">
								<input type="text" id="no_npwp" name="no_npwp" placeholder="contoh : 12072xxx" class="form-control">
							</div>
						</div>

						<!-- Browse File NPWP -->
						<div class="form-group">
							<label for="file_npwp" class="col-sm-4 control-label">
								Upload File NPWP
							</label>
							<div class="col-sm-7">
								<input type="file" id="file_npwp" name="file_npwp">
								<img id="imgFileNPWP" src="#" class="hide" alt="Preview File KTP" style="width:260px; height:100px;">
								<span class="help-block">
									<i class="text-info">Ukuran maksimum file 200MB</i>
								</span>
							</div>
						</div>


						<!-- Nama Lengkap -->
						<div class="form-group">
							<label for="nama_lengkap" class="col-sm-4 control-label">
								Nama Lengkap
							</label>
							<div class="col-sm-7">
								<input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="contoh : Marcus Seiranade" class="form-control">
							</div>
						</div>

					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="no_telepon_1" class="col-sm-4 control-label">
								No Telepon/HP 1
							</label>
							<div class="col-sm-7">
								<input type="text" id="no_telepon_1" name="no_telepon_1" placeholder="contoh : 08137xxx atau 06123xx" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="no_telepon_2" class="col-sm-4 control-label">
								No Telepon/HP 2
							</label>
							<div class="col-sm-7">
								<input type="text" id="no_telepon_2" name="no_telepon_2" placeholder=" (Opsional) Boleh Kosong" class="form-control">
							</div>
						</div>

						<!-- Email Account -->
						<div class="form-group">
							<label for="email" class="col-sm-4 control-label">
								Email Account
							</label>
							<div class="col-sm-7">
								<input type="email" id="email" name="email" placeholder="contoh : abcd@gmail.com" class="form-control">
							</div>
						</div>

						<!-- Alamat -->
						<div class="form-group">
							<label for="alamat" class="col-sm-4 control-label">
								Alamat
							</label>
							<div class="col-sm-7">
								<textarea name="alamat" id="alamat" class="form-control" cols="30" rows="5" placeholder="contoh : KL Yos Sudarso Komplek: Brayan One Stop Square 27-30 "></textarea>
							</div>
						</div>

						<!-- IP Address -->
						<div class="form-group">
							<label for="ip_address" class="col-sm-4 control-label">
								IP Address
							</label>
							<div class="col-sm-7">
								<input type="text" name="ip_address" id="ip_address" class="form-control" value="<?php echo $_ip; ?>" disabled>
							</div>
						</div>

						<!-- Mac Address -->
						<div class="form-group">
							<label for="ip_address" class="col-sm-4 control-label">
								Preview MAC Address
							</label>
							<div class="col-sm-7">
								<input type="text" name="mac_address" id="mac_address" class="form-control" value="<?php echo $_mac; ?>" disabled>
							</div>
						</div>


						<!-- Tombol Daftar -->
						<div class="form-group">
							<div class="col-sm-7 col-sm-offset-4">
								<button type="submit" class="btn btn-primary btn-block">Daftar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="clearfix"></div><br>
			<div class="clearfix"></div><br>
			<div class="clearfix"></div><br>
		</section>
	</div>
</div>
