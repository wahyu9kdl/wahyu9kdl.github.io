<?php
session_start();
$sesiData = !empty($_SESSION['sesiData'])?$_SESSION['sesiData']:'';
if(!empty($sesiData['status']['msg'])){
    $statusPsn = $sesiData['status']['msg'];
    $jenisStatusPsn = $sesiData['status']['type'];
    unset($_SESSION['sesiData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem registrasi dan login dengan PHP dan MySQL</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
    <h1>Sistem registrasi dan login dengan PHP dan MySQL - Codingan.com</h1>
    <h3>Buat akun baru</h3>
	<div class="container">
		<?php echo !empty($statusPsn)?'<p class="'.$jenisStatusPsn.'">'.$statusPsn.'</p>':''; ?>
		<div class="regisForm">
			<form action="akunuser.php" method="post">
				<input type="text" name="nama_awal" placeholder="Nama Awal" required="">
				<input type="text" name="nama_akhir" placeholder="Nama Akhir" required="">
				<input type="email" name="email" placeholder="Email" required="">
				<input type="text" name="telp" placeholder="Nomor Telp" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<input type="password" name="confirm_password" placeholder="Konfirmasi Password" required="">
				<div class="tbl-kirim">
					<input type="submit" name="daftarSubmit" value="Buat Akun">
				</div>
			</form>
		</div>
	</div>
</body>
</html>