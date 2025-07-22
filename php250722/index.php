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
  $emp = array(
    "Amit" => 120000,
    "Ravi" => 85000,
    "Sneha" => 48000,
    "Dipesh" => 16000,
    "Paresh" => 68000,
  );

  function grades($name, $salary){
    if ($salary > 100000){
      $tax = 30;
      echo "<tr><td>$name</td><td>$salary</td><td>" . taxCount($salary, $tax) . "</td></tr>";
    } elseif ($salary > 80000) {
      $tax = 20;
      echo "<tr><td>$name</td><td>$salary</td><td>" . taxCount($salary, $tax) . "</td></tr>";
    } elseif ($salary > 50000) {
      $tax = 15;
      echo "<tr><td>$name</td><td>$salary</td><td>" . taxCount($salary, $tax) . "</td></tr>";
    } elseif ($salary > 20000) {
      $tax = 10;
      echo "<tr><td>$name</td><td>$salary</td><td>" . taxCount($salary, $tax) . "</td></tr>";
    } else {
      echo "<tr><td>$name</td><td>$salary</td><td>" . taxCount($salary, 0) . "</td></tr>";
    }
  }

  echo "<table>";
  echo "<tr> <th>Name</th> <th>Salary</th> <th>In Hand</th> </tr>";

  foreach($emp as $n => $s){
    grades($n, $s);
  }
  
  function taxCount($salary, $taxPercent){
    $finalSalary = $salary * (1 - ($taxPercent / 100));  
    return round($finalSalary, 2);
  }

?>

</body>
</html>