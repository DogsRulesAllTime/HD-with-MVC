<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="frontend/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/css/style.css">
</head>
<body>
    <div class="form">
<form class="form-horizontal" action="index.php" role="form" method="POST">
  <div class="form-group">
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Логин</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Логин" name="login">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="Пароль" name="psw">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-sm" name="subm">Войти</button>
    </div>
  </div>
    </div>  
</form>
</div>
</body>
</html>