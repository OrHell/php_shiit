<?php
$id = $_GET['link'];


$host = 'localhost';
$database = 'post_hub';
$user = 'data_b';
$password ='2584';

$link = mysqli_connect($host,$user,$password,$database) or die("Eror " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$sql_message_table = "SELECT *FROM message";
$result_message = mysqli_query($link,$sql_message_table);
//$quer = 'UPDATE core_config_data SET value = 'Ваше значение' WHERE config_id = '81';';
if(isset($_POST['start'])){
  $post = 'Отправленно';
  $query_one = "UPDATE message SET status = '{$post}' WHERE ident ='{$id}';";
  $result_message_qr = mysqli_query($link,$query_one);
  echo '<script>location.replace("posthub_otdelenie.php");</script>'; 
}
if(isset($_POST['center'])){
  $post = 'В пути';
  $query_one = "UPDATE message SET status = '{$post}' WHERE ident ='{$id}';";
  $result_message_qr = mysqli_query($link,$query_one);
  echo '<script>location.replace("posthub_otdelenie.php");</script>'; 
}
if(isset($_POST['end'])){
  $post = 'Прибыло в пункт назначения';
  $query_one = "UPDATE message SET status = '{$post}' WHERE ident ='{$id}';";
  $result_message_qr = mysqli_query($link,$query_one);
  echo '<script>location.replace("posthub_otdelenie.php");</script>'; 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Статус отправления</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

    <style>
            body{
      background-image: url(../image/bg_work.png);
      background-repeat: no-repeat;  
      background-size: cover;
                
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PostHub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="posthub_main.php">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="posthub_otdelenie.php">Отправления</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="posthub_message.php">Создать отправление</a>
      </li>

    </ul>
  </div>
</nav>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Статус отправления</h1>
  </div>


<div class="pricing-header px-3 py-5 pt-md-5 pb-md-4 mx-auto text-center">
<div class ="py-5 text-center">
  <h2 class="display-4"></h2>
  <p class="lead"></p>
</div>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Отправлено</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Этот статус означает</li>
          <li>что отправление</li>
          <li>только было созданно</li>
          <li>____________________</li>
        </ul><form method = "post">
        <button type="submit" name = "start" class="btn btn-lg btn-block btn-primary">Изменить статус</button>
      </form></div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">В пути</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Этот статус отправления</li>
          <li>означает что оно в пути</li>
          <li>из пункта отправления</li>
          <li>_____________________</li>
        </ul><form method = "post">
        <button type="submit" name = "center" class="btn btn-lg btn-block btn-primary">Изменить статус</button>
     </form> </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Прибыло</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Этот статус отправления</li>
          <li>означает что оно прибыло</li>
          <li>в пункт назначения</li>
          <li>___________________</li>
        </ul><form method = "post">
        <button type="submit" name = "end" class="btn btn-lg btn-block btn-primary">Изменить статус</button>
      </form></div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2019-20-- </small>
      </div>


 
    </div>
  </footer>
</div>
</body>
</html>
