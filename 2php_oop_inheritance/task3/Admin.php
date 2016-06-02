<?php 
include('User.php');
class Admin extends User{

	function publish_messages($title, $content){
		echo 'The title '.$title.'the content '.$content;
	}
}