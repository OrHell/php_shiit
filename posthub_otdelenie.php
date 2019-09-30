<?php
$host = 'localhost';
$database = 'post_hub';
$user = 'data_b';
$password ='2584';

$link = mysqli_connect($host,$user,$password,$database) or die("Eror " . mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$sql_message_table = "SELECT *FROM message";
$result_message = mysqli_query($link,$sql_message_table);

$name_array = array();
$id_array = array();
$type_array = array();
$address_array_one = array();
$address_array_two = array();
$status_array = array();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Отправления</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/offcanvas/">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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


    <!-- Custom styles for this template -->
  

    <link href="offcanvas.css" rel="stylesheet">
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
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Просмотреть отправления</h2>
    <p class="lead">В этой форме вам необходимо ввести данные отправления после чего нажать на кнопку создать. После этого данные будут записаны</div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Свежие отправления</h6>
    <div class="media text-muted pt-3">
<?php
$index = 0;
while($row = mysqli_fetch_array($result_message)){
    $name_array[$index] = $row['name_mes'];
    $id_array[$index] = $row['ident'];
    $type_array[$index] = $row['type_send'];
    $address_array_one[$index] = $row['otkuda'];
    $address_array_two[$index] = $row['kuda'];
    $status_array[$index] = $row['status'];

    $name = $name_array[$index];
    $id =$id_array[$index];
    $type =$type_array[$index];
    $add1 =$address_array_one[$index];
    $add2 =$address_array_two[$index];
    $status =$status_array[$index];
echo'

   
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title></title><rect width="150%" height="150%" fill="#007bff"/><text x="70%" y="70%" fill="#007bff" dy=".3em">32x32</text></svg>
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark"><a href ="posthub_work.php?link='.$id.'">'.$name.'</a></strong>
       '.$status.'
      </p>';
  $index++;
}
?>
  </div>
    
  
    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="offcanvas.js"></script></body>
</html>
