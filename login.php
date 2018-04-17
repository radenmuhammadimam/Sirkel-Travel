<?php 
	$email = $mysqli->escape_string($_POST['email']);
	$result = $mysqli->query("SELECT * FROM user WHERE email='$email'")
	or die ($mysqli->error());

	if ($result->num_rows == 0){
		echo "<script>alert('belum ada coy')</script>";
	}
	else{
		$user = $result->fetch_assoc();
		if(password_verify($_POST['password'], $user['password'])){
			$_SESSION['nama'] = $user['nama'];
			$_SESSION['logged_in'] = true;
			echo "<script>alert('Login Berhasil')
			window.location = 'formpesan.php';
			</script>";
			//header("location : profile.php");
		}
		else{
			echo "<script>alert('Password Salah !')</script>";
		}
	}
 ?> 