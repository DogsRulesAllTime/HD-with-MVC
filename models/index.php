<?php
require_once __DIR__ . '/../functions/db.php';

if (!empty($_POST['login']) AND !empty($_POST['psw'])) {
  // echo $_POST['login'];
  // echo $_POST['psw'];die();
 if (isset($_POST['login'],$_POST['psw'])) {
  $login = $_POST['login'];
   $password = $_POST['psw'];
login("SELECT * FROM `account` WHERE `login` = '$login' AND `psw` = '$password'",$login,$password);

}
}
