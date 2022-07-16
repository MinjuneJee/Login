<?php

if (isset($_POST["submit"])) {
			require_once "dbh.inc.php";
			require_once "functions.inc.php";

			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$email = $_POST['email'];
			$username = $_POST['uid'];
			$pwd = 	$_POST['pwd'];
			$pwdrepeat = $_POST['pwdrepeat'];


						// Left inputs empty
						// We set the functions "!== false" since "=== true" has a risk of giving us the wrong outcome
						if (emptyInputSignup($first_name, $last_name, $email, $username, $pwd, $pwdrepeat) !== false){
							header("location: ../signup.php?error=emptyinput");
							exit();
						}


						// Proper username chosen
						if (invalidUid($uid) !== false) {
							header("location: ../signup.php?error=invaliduid");
							exit();
						}

						// Proper email chosen
						if (invalidEmail($email) !== false) {
							header("location: ../signup.php?error=invalidemail");
							exit();
						}

						// Do the two passwords match?
						if (pwdMatch($pwd, $pwdrepeat) !== false) {
							header("location: ../signup.php?error=passwordsdontmatch");
							exit();
						}

						// Is the username taken already
						if (uidExists($conn, $username) !== false) {
							header("location: ../signup.php?error=usernametaken");
							exit();
						}

						createUser($conn, $first_name, $last_name, $email, $username, $pwd);

}else{
	header("location: ../signup.php");
		exit();
}




 ?>
