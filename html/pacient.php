<?php
$host = 'localhost';
$database = 'pacient';
$user = 'data_b';
$password = '2584';




//$add_command = "insert into pacient_info values(0, 'Максим Клевцов', '20.05.2000', 'Здоров', 'Виктор Петров','5');";

$link = mysqli_connect($host,$user,$password,$database) or die("Eror FUCK" . mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$query = "SELECT User, Host FROM mysql.user;";
$sql_comand_name = "SELECT *FROM pacient_info;";
$result_name = mysqli_query($link,$sql_comand_name);

$name_array = array();
$surname_array = array();
$father_array = array();
/*
$index = 0;
while($row = mysqli_fetch_array($result_name)){
  $name_array[$index] = $row['pacient_inf'];
  $index++;
}
echo $name_array[0].$name_array[1].$name_array[2];
*/


if(isset($_POST['submit-form'])){

    $name =  $_POST['name'];
    $surname = $_POST['surname'];
    $father = $_POST['otches'];
    $date = $_POST['date'];
    $diagnose = $_POST['diagnose'];
    $nomer = $_POST['nomer'];
    $doctor = $_POST['doctor'];
    

    $add_mysql = "INSERT INTO pacient_info VALUES(0, '{$name}','{$surname}','{$father}', '{$date}', '{$diagnose}', '{$doctor}', '{$nomer}');";

    $result = mysqli_query($link,$add_mysql) or die ("Error" . mysqli_error($link));
    if($result){
        echo "<script>alert(\"Данные добавленны в базу данных, спасибо"."\");</script>";
        echo '<script>location.replace("home.php");</script>'; 
        exit;
    }
}

?>
<!doctype html>
<html lang="ru">
  <head>
    
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/styleDoctor.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
      #add{
    position: relative;
    border-radius: 0 30px 30px 0;
    left: 1340px;
    z-index: 2;
    width: 200px;
    background: #55576d;
    height: 100px;
    color: aliceblue;
    text-align: center;
    padding-top: 30px;
    font-size: 25px;
}

      </style>
  </head>
  <body>
      <div id="windowadd">    
          <div class="info1">
            <span>Заполните поля</span>
            <form method="post">
            <input name = "name" type="text" placeholder="Имя:">
            <input name = "surname" type="text" placeholder="Фамилия:">
            <input name = "otches" type="text" placeholder="Отчество:">
            <input name = "date" type="text" placeholder="Дата рождения:">
            <input name = "diagnose" type="text" placeholder="Диагноз:">
            <input name = "nomer" type="text" placeholder="Номер отделения:">
            <input name = "doctor" type="text" placeholder="Лечущий врач">
            <div>
              
            <button name = "submit-form" type = "submit" id="d" class = "btn btn-dark">Добавить</button>
</form>        
        </div >
            </div>
      </div>
     
  <?php
$index = 0;
while($row = mysqli_fetch_array($result_name)){
  $name_array[$index] = $row['name'];
  $surname_array[$index] = $row['surname'];
  $father_array[$index] = $row['father'];
  $name_pacient = $name_array[$index];   
  $surname_pacient = $surname_array[$index];
  $father_pacient = $father_array[$index]; 

  echo'    <div id="list"> 
        <h3>'.$name_pacient.' '.$surname_pacient.'</h3>
        <h2>Sercolog doctor</h2>
        <h6>'.$father_pacient.'</h6>
      </div>';
      $index++;

    }
?>
      <script src="scripts/window.js"></script>
     <div>
      <div id="add" class ="add">Добавить</div>
     
      <script src="scripts/window2.js"></script>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

