<?php 
class User {
	var $username;
	var $password;
	var $role;

//constructor


	function login($usrn, $psw, $role){
	if ($usrn == 'user') {
		if ($psw == 'user') {
		 	if ($role == 'plain') {
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