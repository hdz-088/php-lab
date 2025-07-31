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
    .mirror-animation {
      animation: flipX .5s infinite alternate;
    }

@keyframes flipX {
  0% {
    transform: scaleX(1);
  }
  100% {
    transform: scaleX(-1);
  }
}

  </style>
</head>
<body>
  <img src="assets/private.png" alt=""  height="350px">

<?php 

    function cntVowels($string){
      $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
      $count = 0;

      for ($i = 0; $i < strlen($string); $i++){
        if (in_array($string[$i], $vowels)){
          $count++;
        }
      }
      return $count;
    }
  
    echo "Vowel Count: " . cntVowels("Cute Penguine") . "<br>";

?>

</body>
</html>