<?php

require_once __DIR__ . '/../functions/db.php';



// $_SESSION = selectMANY("SELECT * FROM `account` WHERE `login` = 2 ");
protect($_SESSION);
var_dump($_SESSION);
// var_dump($_SESSION);



// $user = selectMANY("SELECT * FROM `account` WHERE `id_sotr` =  {$_SESSION['id']} ");
// var_dump($user);
// echo $user['dostup'];

function dostupCheck(){
	if ($_SESSION['dostup'] ==0) {
		$a = getInfo();
		require_once __DIR__ . '/../views/userpanel.php';
	 	echo "dostup  usera";
	 } elseif ($_SESSION['dostup'] >=1) {
	 	require_once __DIR__ . '/../views/adminpanel.php';
	 	echo "ravno dostup admina";
	 }

}
//logout btn
function logout(){
	if (isset($_POST['exit'])) {
		echo "string";
		unset($_POST);
		session_destroy();
		header('location: /mvc/');
	}else{
		echo "ne nazhata";
	}
}
logout();

// echo $_SESSION['id'];
function getInfo()
{
$a = selectaray("SELECT * FROM users INNER JOIN zapiski ON users.id = zapiski.specialist WHERE id_otprav = {$_SESSION['id']}");
return $a;
}
// $a = getInfo();

// foreach ($a as $key=>$value  ) {
// 	echo $value['id'];
// }


