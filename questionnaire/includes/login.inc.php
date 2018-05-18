<?php

session_start();
if (isset($_POST['submit'])){
	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	//check if input is empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultChecked = mysqli_num_rows($result);
		if ($resultChecked < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//dehashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);


				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//login user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_gender'] = $row['gender'];
					$_SESSION['u_faculty'] = $row['faculty'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}

} else {
	header("Location: ../index.php?login=error");
	exit();
}
