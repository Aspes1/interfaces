<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing-page/templates/jquery-confirm/jquery-confirm.min.css">
</head>
<body>
	
	<h1>HEADING</h1>

	<button id="tblSaya" onclick="tampilAlert()">Klik Saya</button>

	<button id="tblKonfirmasi" onclick="tampilConfirm()">Tombol Konfirmasi</button>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/landing-page/templates/jquery-confirm/jquery-confirm.min.js"></script>

	<script>

		function tampilConfirm() {
			$.confirm({
				title: 'Konfirmasi',
				content: 'Apakah Anda Ingin Menghapus Data Tersebut ?',
				buttons: {
					ya: function(){
						$.alert({
							title: 'Successfull',
							content: 'Data Berhasil Di Hapus',
							buttons:{
								tutup: function(){
									close();
								}
							}
						});
					},
					tidak:function(){
						close();
					}

				}
			});
		}

		function tampilAlert()
		{
			$.alert({
				title: 'Informasi',
				content: 'Ini Informasi Data Pelanggan'

			});
		}
	</script>
</body>
</html>	