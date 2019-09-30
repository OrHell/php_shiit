
<?php
$host = 'localhost';
$database = 'post_hub';
$user = 'data_b';
$password ='2584';

$link = mysqli_connect($host,$user,$password,$database) or die("Eror " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$sql_message_table = "SELECT *FROM message";
$result_message = mysqli_query($link,$sql_message_table);



if(isset($_POST['submit_form'])){
$name = $_POST['name'];
$id = $_POST['id'];
$type =$_POST['type'];
$add1 =$_POST['add1'];
$add2 =$_POST['add2'];


$add_mysql = "INSERT INTO message VALUES(0, '{$name}','{$id}','{$type}', '{$add1}', '{$add1}','Отправлено');";

$result = mysqli_query($link,$add_mysql) or die ("Error" . mysqli_error($link));

if($result){

  echo '<script>location.replace("posthub_main.php");</script>'; 
  exit;
}

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
    <title>Создание нового отправления</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <style>
            body{
      background-image: url(../image/screen.png);
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
    <!-- Bootstrap core CSS -->


  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

    <!-- Custom styles for this template -->

    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body >

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
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/images/mat.png" alt="" width="72" height="72">
    <h2>Создать отправление</h2>
    <p class="lead">В этой форме вам необходимо ввести данные отправления после чего нажать на кнопку создать. После этого данные будут записаны</div>

  <div class="row">
    


    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Создание отправления</h4>
      <form method="post" class="needs-validation" >
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Наименование отправления: </label>
            <input type="text" class="form-control" name = "name" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Уникальный индификатор:</label>
            <input name ="id"  type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              
            </div>
          </div>
        </div>

 

        <div class="mb-3">
          <label for="email">Тип отправления:<span class="text-muted"></span></label>
          <input name = "type"  class="form-control" id="email" placeholder=" ">
          <div class="invalid-feedback">
   
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Адрес отправления:</label>
          <input name = "add1" type="text" class="form-control" id="address" placeholder="" required>
          <div class="invalid-feedback">
            
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Адрес назначения:<span class="text-muted"></span></label>
          <input name = "add2" type="text" class="form-control" id="address2" placeholder="">
        </div>

        <div class="row">
          
            <div class="invalid-feedback">
          
            </div>
          </div>
          <div class="col-md-4 mb-3">
       
            <div class="invalid-feedback">
             
            </div>
          </div>
          <div class="col-md-3 mb-3">
      
          </div>
        </div>
        <hr class="mb-4">
      
        <div class="d-block my-3">
          
     
        <button class="btn btn-primary btn-lg btn-block" name = "submit_form" type="submit">Создать отправление</button>
      </form>
    </div>
  </div>


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="form-validation.js"></script></body>
</html>
