<?php  
	$email = $mysqli->escape_string($_POST['email']);
	$nama = $mysqli->escape_string($_POST['nama']);
	$tgl_brngkt = $mysqli->escape_string($_POST['tgl_brngkt']);
	$jmlh_org = $mysqli->escape_string($_POST['jmlh_org']);
	$paket = $mysqli->escape_string($_POST['paket']);

	$result = $mysqli->query("SELECT * FROM  datatravel")
	or die ($mysqli->error());

		$sql = "INSERT INTO user (email, nama, tgl_brngkt, jmlh_org, paket)"."VALUES('$email', '$nama', '$tgl_brngkt','$jmlh_org', '$paket')";

		$mysqli->query($sql);

		echo "<script>alert('Registrasi Sukses')
		window.location = 'index.php';
		</script>";
?>
