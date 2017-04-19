<?php
session_start(); //старт сессис
//подключение к бд
function connectDB(){
	$connect = mysqli_connect("localhost", "root", "", "baza");
	mysqli_set_charset( $connect,'utf8');
	return $connect;
}



function reurl(){
    echo "вы не можете прочитать скрытый текст";
    $url ="http://localhost:8383/HD-v2.0/"; //here you set the url
    $time_out = 3; //here you set how many seconds to untill refresh
    header("refresh: $time_out; url=$url");
    die();

}
function protect($a){
    if (isset($a)){
        // echo "этот текст видят только зарегистрированыые пользователи";
    } else{
        reurl();
    }
}

function selectMANY($query){
	$connect = connectDB();
    $result = mysqli_query($connect , $query);
    $rez = [];
    while ($row = mysqli_fetch_assoc($result) ){
        $rez = $row;
    }
    return $rez;
}

// $items = selectMANY("SELECT * FROM `account` " );
// var_dump($items);
// echo "<br>";
// foreach($items as $str){
//     echo $str['id'].'  '.$str['login'].'<br>';
// }
function zapros($query){
    $connect = connectDB();
    
    $result = mysqli_query($connect , $query);
    return $result;
}


//Проверка логина и пароля
function login($sql,$login,$password){
   $vibor = selectMANY($sql);
   $zapros = zapros($sql);

  if(isset($login,$password)){

if ( mysqli_num_rows($zapros) == 0){
    exitbtn();
    echo   "пароль или логин не верный!";
}elseif(mysqli_num_rows($zapros) >= 1){
    header('location: /mvc/panel.php');
    echo  "пароль truee";
}
}
}


//кнопка выхода
function exitbtn(){
unset($_POST);
header('location: /mvc/');
}
?>
