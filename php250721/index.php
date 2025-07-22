<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Lab 21st July</title>
  <style>
    * {
      font-family: "Poppins";
      font-size: 22px;
      font-weight: 500;
      background: #1f1f1f;
      color: aqua;
    }
    body {
      height: 90vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 10px
    }
    th, td{
      border: 1px solid aqua;
      border-radius: 10px;
      padding: 0 10px;
    }
  </style>
</head>
<body>
  <img src="assets/head.png" alt=""  height="150px">

<?php 
  $marks = array(
    "Amit" => 90,
    "Ravi" => 85,
    "Sneha" => 78,
    "Nick" => 70,
    "Dipesh" => 56,
  );

  function grades($name, $mark){
    if ($mark > 90){
      echo "<tr><td> $name </td><td>  $mark </td><td> A </td></tr>";
    } elseif ($mark > 80) {
      echo "<tr><td> $name </td><td>  $mark </td><td> B </td></tr>";
    } elseif ($mark > 70) {
      echo "<tr><td> $name </td><td>  $mark </td><td> C </td></tr>";
    } elseif ($mark > 60) {
      echo "<tr><td> $name </td><td>  $mark </td><td> D </td></tr>";
    } elseif ($mark >= 50) {
      echo "<tr><td> $name </td><td>  $mark </td><td> E </td></tr>";
    } elseif ($mark < 50) {
      echo "<tr><td> $name </td><td>  $mark </td><td> F </td></tr>";
    }
  }
  echo "<table>";
  echo "<tr> <th>Name</th> <th>Marks</th> <th>Grade</th> </tr>";

  $s = 0;

  arsort($marks);

  foreach($marks as $n => $m){
    grades($n, $m);

    $s += $m;
  }
  
  $n = count($marks);
  $a = $s/3;

  function summ($n, $a){
    echo "Total students are $n and average marks are $a </br>";
  }
?>

</body>
</html>