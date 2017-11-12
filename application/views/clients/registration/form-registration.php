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
                        Pendaftaran loket PPOB INM ini tidak dipungut biaya.Daftar PPOB di PPOB Bank BTN GRATIS tidak di pungut biaya apapun. Silahkan isi form pendaftaran berikut ini. Ikuti prosedur pendaftaran dengan benar.
                    </p>
                </div>
            </div>
			<div class="row">
				<div class="col-md-5">
                    <h3 class="text-info">Petunjuk Pendaftaran</h3>
                    <ol class="list-group" style="text-align:justify;">
                        
                        <li class="list-group-item no-border">
                            Proses pendaftaran loket PPOB akan diproses di jam 06.00 – 20.00 WIB. Pendaftaran diluar jam tersebut akan diproses keesokan harinya.
                        </li>

                        <li class="list-group-item no-border">
                            Proses pendaftaran hanya dapat dilakukan di device PC/Laptop dan pastikan sistem operasi yang anda gunakan adalah <strong>Windows XP, 7,Vist dan 10 atau IOS </strong> 
                        </li>

                        <li class="list-group-item no-border">
                            Saat pendaftaran, MAC Address PC/Laptop anda yang terdeteksi adalah yang anda gunakan saat mendaftar. Anda dapat mengubah dan menambahkan MAC Address PC/Laptop yang lainnya, sesuai kebutuhan.
                            Anda juga dapat mendaftarkan IMEI mobile phone anda sebagai akun loket. tetapi tidak mendaftar dengan mobile tersebut. (lihat petunjuk sebelumnya)
                        </li>
                    </ol>
				</div>

				<div class="col-md-7">
					<form class="form-horizontal" role="form">
                        <!-- Model Fee -->
                        <div class="form-group">
                            <label class="control-label col-sm-4">Model Fee</label>
                            <div class="col-sm-7">
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="rd_fee" value="feelive">Fee Live
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        <input type="radio" name="rd_fee" value="feebln">Fee Bulanan
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Nama Lengkap -->
						<div class="form-group">
							<label for="txt_nama_loket" class="col-sm-4 control-label">Nama Loket</label>
							<div class="col-sm-7">
								<input type="text" id="txt_nama_loket" name="txt_nama_loket" placeholder="contoh : Loket Perdana" class="form-control">
							</div>
						</div>

                        <!-- No Identitas (KTP) -->
                        <div class="form-group">
							<label for="txt_no_ktp" class="col-sm-4 control-label">No Identitas (KTP)</label>
							<div class="col-sm-7">
								<input type="text" id="txt_no_ktp" nama="txt_no_ktp" placeholder="contoh : 1230204871003" class="form-control">
							</div>
						</div>

                        <!-- Nama Lengkap -->
						<div class="form-group">
							<label for="txt_nama_lengkap" class="col-sm-4 control-label">Nama Lengkap</label>
							<div class="col-sm-7">
								<input type="text" id="txt_nama_lengkap" nama="txt_nama_lengkap" placeholder="contoh : Marcus Seiranade" class="form-control">
							</div>
						</div>

                        <!-- No Telepon / No Handphone -->
						<div class="form-group">
							<label for="txt_no_phone" class="col-sm-4 control-label">No Telepon/HP</label>
							<div class="col-sm-7">
								<input type="text" id="txt_no_phone" nama="txt_no_phone" placeholder="contoh : 08137xxx atau 06123xx" class="form-control">
							</div>
						</div>

                        <!-- Email Account -->
						<div class="form-group">
							<label for="txt_email" class="col-sm-4 control-label">Email Account</label>
							<div class="col-sm-7">
								<input type="email" id="txt_email" name="txt_email" placeholder="contoh : abcd@gmail.com" class="form-control">
							</div>
						</div>

                        <!-- Alamat -->
                        <div class="form-group">
							<label for="txt_alamat" class="col-sm-4 control-label">Alamat</label>
							<div class="col-sm-7">
                                <textarea name="txt_alamat" id="txt_alamat" class="form-control" cols="30" rows="5" placeholder="contoh : KL Yos Sudarso Komplek: Brayan One Stop Square 27-30 " ></textarea>
							</div>
						</div>

                        <!-- Seleksi Propinsi -->
						<div class="form-group">
							<label for="sel_propinsi" class="col-sm-4 control-label">Propinsi</label>
							<div class="col-sm-7">
								<select id="sel_propinsi" name="sel_propinsi" class="form-control">
                                    <option>~~ Pilih Propinsi ~~</option>
									<option>Sumatera Utara</option>
									<option>Sumatera Selatan</option>
								</select>
							</div>
						</div>

                        <!-- Seleksi Kabupaten -->
                        <div class="form-group">
							<label for="sel_kabupaten" class="col-sm-4 control-label">Kabupaten</label>
							<div class="col-sm-7">
								<select id="sel_kabupaten" name="sel_kabupaten" class="form-control">
                                    <option>~~ Pilih Kabupaten ~~</option>
									<option>Deli Serdang</option>
									<option>Percut Sei Tuan</option>
								</select>
							</div>
						</div>

                        <!-- Seleksi Kecamatan -->
                        <div class="form-group">
							<label for="sel_kecamatan" class="col-sm-4 control-label">Kecamatan</label>
							<div class="col-sm-7">
								<select id="sel_kecamatan" name="sel_kecamatan" class="form-control">
                                    <option>~~ Pilih Kecamatan ~~</option>
									<option>Percut Sei Tuan</option>
								</select>
							</div>
						</div>

                        <!-- Seleksi Kelurahan -->
                        <div class="form-group">
							<label for="sel_kelurahan" class="col-sm-4 control-label">Kelurahan</label>
							<div class="col-sm-7">
								<select id="sel_kelurahan" name="sel_kelurahan" class="form-control">
                                    <option>~~ Pilih Kelurahan ~~</option>
									<option>Kenangan</option>
								</select>
							</div>
						</div>

                        <!-- Tombol Daftar -->
						<div class="form-group">
							<div class="col-sm-7 col-sm-offset-4">
								<button type="submit" class="btn btn-primary btn-block">Daftar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
</div>

