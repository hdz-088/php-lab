<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Lab 14th July</title>
  <style>
    * {
      font-family: "Poppins";
      font-size: 26px;
      background: #1f1f1f;
      color: aqua;
    }
    body {
      height: 90vh;
    }
    .body{
      font-weight: 600;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px
    }
    .watermark{
      text-align: center;
      font-size: 14px;
      color: #f1f1f1;
    }
  </style>
</head>
<body>
  <div class="body">
  <img src="assets/study.png" alt="" width="250px" height="400px">
  <?php 
  $marks = 97;

  if ($marks > 90){
    echo "Penguin got A grade";
  } else if ($marks > 80) {
    echo "Penguin got B grade";
  } else if ($marks > 60) {
    echo "Penguin got C grade";
  } else if ($marks > 40) {
    echo "Penguin got D grade";
  } else if ($marks < 40) {
    echo "Penguin failed the exams!";
  } else {
    echo "Invalid input";
  }
  ?>

  </div>
  <div class="watermark">Made by HDz🦉</div>
</body>
</html>