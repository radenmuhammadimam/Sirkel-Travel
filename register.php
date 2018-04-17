<?php  
	$email = $mysqli->escape_string($_POST['email']);
	$password = $mysqli->escape_string(password_hash($_POST['password'],PASSWORD_BCRYPT));
	$nama = $mysqli->escape_string($_POST['nama']);

	$result = $mysqli->query("SELECT * FROM user WHERE email='$email'")
	or die ($mysqli->error());

	if ($result->num_rows > 0){
		echo "<script>alert('akun sudah ada coy')</script>";
	}
	else{
		$sql = "INSERT INTO user (email, password, nama)"."VALUES('$email', '$password', '$nama')";

		$mysqli->query($sql);

		echo "<script>alert('Registrasi Sukses')
		window.location = 'masuk.php';
		</script>";
	}
?>
