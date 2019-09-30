<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/styleDoctor.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
      <div class="info">
          <?php

$host = 'localhost';
$database = 'pacient';
$user = 'data_b';
$password = '2584';
$link = mysqli_connect($host,$user,$password,$database) or die("Eror FUCK" . mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$name_array =array();
$surname_array = array();
$father_array = array();
$diagnose_array = array();
     $nomer = $_GET['link'];

     $table_sql = "select *from doctor_info where nomer = '{$nomer}';";
     $mysql_command =mysqli_query($link,$table_sql) or die("Error".mysqli_error($link));      
        $row = mysqli_fetch_array($mysql_command);
        $name = $row['name'];
        $surname = $row['surname'];
        $father = $row['father'];
     
     echo '<span>'.$name.'</span>
        <span>'.$surname.'</span>
        <span >'.$father.'</span>
       
        <span class="other">Лечит следующих пациентов:</span>';

    $table_pacient = "select *from pacient_info where nomer ='{$nomer}'";
    $sql_table_pacient = mysqli_query($link,$table_pacient) or die ("Error".mysqli_error($link));
    $index = 0;
    while($row_pacient = mysqli_fetch_array($sql_table_pacient)){
        $name_array[$index] =$row_pacient['name'];
        $surname_array[$index]= $row_pacient['surname'];
        $father_array[$index] = $row_pacient['father'];
        $diagnose_array[$index] = $row_pacient['diagnose'];

        $name_pacient = $name_array[$index];
        $surname_pacient = $surname_array[$index];
        $father_pacient = $father_array[$index];
        $diagnose_pacient = $diagnose_array[$index]; 

        echo '<span class="pacient"> '.$surname_pacient.' '.$name_pacient.' '.$father_pacient.' - '.$diagnose_pacient.'</span><hr noshade size="4">';}
        $index++;
        ?>
    </div >
</body>
</html>