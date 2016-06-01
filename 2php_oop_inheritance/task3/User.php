<?php 
class User {
	var $username;
	var $password;
	var $role;

//constructor


	function login($usrn, $psw, $role){
	if ($usrn == 'user' || $usrn == 'admin') {
		if ($psw == 'userpsw' || $psw == 'adpsw') {
		 	if ($role == 'plain user') {
		 		header('Location: user_view.php');
		 	}
		 	elseif ($role == 'admin'){
		 		header('Location: admin_view.php');
		 	}
		}
	} else {
		echo "Wrong username/password";
	}

}//func end


}