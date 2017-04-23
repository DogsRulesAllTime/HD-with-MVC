

view user
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="frontend/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="frontend/css/bootstrap.css">

   <!-- Подключаем удаленно jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script src="frontend/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
<form method="post" action="">
	<input type="submit" value="exit" name="exit">
</form>




<div class="row">
<div  class="col-md-6 offset-md-1">
  <div class="jumbotron ">
<h3 class="text-center">INtro</h3> 
<p class="text-justify">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p> 
    </div>
  

 <!-- Left2 -->
 <div class="jumbotron ">
 <h3 class="text-center">История заявок</h3>
   <table class="table ">
  <thead class="thead-inverse">
    <tr>
      <th>№ </th>
      <th>Отдел</th>
      <th>Тема</th>
      <th>Дата создания</th>      
       <th>Дата выполнения</th>
       <th>Специалист</th>
      <th>Статус</th>
    </tr>
  </thead>
   <tbody>
      <tr class="table-success">
      <td>3</td>
      <td>132</td>
      <td>Установка ПО</td>
      <td>14.03.2017</td>
      <td>14.03.2017</td>
      <td>
      <!-- Выпадающее меня с сылкой для отправки на почту -->
    <div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Гуров
</button>
<div class="dropdown-menu" aria-labelledby="about-us">
<a class="dropdown-item" href="mailto:vlad@htmlbook.ru"><i class="fa fa-envelope-o " aria-hidden="true"></i> Отправить письмо</a>

</div>
</div>
  
      </td>
      <td>Обработка</td>
    </tr>
       <tr class="">
      <td>3</td>
      <td>132</td>
      <td>Установка ПО</td>
      <td>14.03.2017</td>
      <td>14.03.2017</td>
      <td>Зобов П.А.</td>
           <td style="text-align:center;"><i class="fa fa-lightbulb-o fa-2x" aria-hidden="true" style="color: orange;"></i>
      </td>
    </tr>
       <tr class="">
      <td>3</td>
      <td>132</td>
      <td>Установка ПО</td>
      <td>14.03.2017</td>
      <td>14.03.2017</td>
      <td>Зобов П.А.</td>
      <td style="text-align:center;">
      <span class="text-center">
      <i class="fa fa-check-circle fa-2x" aria-hidden="true" style="color: green;">
      </i> </span> 
      </td>

    </tr>
    <?php
   // $a = selectaray("SELECT * FROM users INNER JOIN zapiski ON users.id = zapiski.specialist WHERE id_otprav = {$_SESSION['id']}");
foreach ($a  as $key=>$value ) {
	echo $value['id'];

  ?>
  <tr class="">
    <td>  <?php echo $value['id']; ?></td>
   <td> <?php $value['otd']; ?></td>
   <td> <?php echo $value['tema']; ?></td>
    <td>  <?php echo date_create($value['data_sozdania'])->Format('d.m.Y'); ?>  </td> 
    <!-- //вывод даты форматирование. -->
   <td> <?php echo $value['data_end']; ?> </td>
<td>
<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php echo $value['surname']; ?>
</button>
<div class="dropdown-menu" aria-labelledby="about-us">
<a class="dropdown-item" href="mailto:<?php echo $value['id']; ?>">
<i class="fa fa-envelope-o " aria-hidden="true"></i> Отправить письмо</a>

</div>
</div>
 </td>   
   
   <?php
     if ($value['status']==1) {   //если статус 1 то заявка в обработке и выводиться значяек лампочки
       echo '<td style="text-align:center;"><i class="fa fa-lightbulb-o fa-2x" aria-hidden="true" style="color: orange;"></i></td>';
     }elseif ($value['status']==2) { //если статус 2 то заявка выполнена и выводиться значяек галочки
        echo '<td style="text-align:center;"><i class="fa fa-check-circle fa-2x" aria-hidden="true" style="color: green;"></i></td>';
     }
     ?>
   </tr>

<?php 
}
?>
       </tbody>
      </table>
  
</div>
</div>




<!-- right -->
<div class="col-md-3">
  <div class="jumbotron ">
  <h3 class="text-center"><?php echo $_SESSION['name']." ".$_SESSION['surname']; ?></h3>
  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Табельный номер:</td>
                        <td><?php echo "$_SESSION[id]" ?></td>
                      </tr>
                      <tr>
                        <td>Должность:</td>
                        <td><?php echo "$_SESSION[id]" ?></td>
                      </tr>
                      <tr>
                        <td>Отдел:</td>
                        <td><?php echo "$_SESSION[otd]" ?></td>
                      </tr>
                      <tr>
                        <td>Здание:</td>
                        <td>ЛКК</td>
                      </tr>
                   
                         <tr>
                                 <tr>
                        <td>Этаж:</td>
                        <td>2</td>
                                  </tr>
                        <tr>
                        <td>Комната:</td>
                        <td>2</td>
                      </tr>
                      <tr>
                       <tr>
                        <td>Номер телефона:</td>
                        <td> <?php echo "$_SESSION[number]" ?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
  </div>
</div>




</body>
</html>