<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Lab 29th July</title>
    <style>
      * {
        font-family: "Poppins";
        font-size: 22px;
        font-weight: 500;
        background: #1f1f1f;
        color: aqua;
        box-sizing: border-box;
      }

      body {
        height: 90vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
        text-align: center;
      }

      th,
      td {
        border: 1px solid aqua;
        border-radius: 10px;
        padding: 0 10px;
      }

      form {
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
      }

      input[type="text"],
      input[type="submit"] {
        padding: 8px 16px;
        border: none;
        border-bottom: 1px solid aqua;
        border-radius: 8px;
        background: #1f1f1f;
        color: aqua;
        font-size: 18px;
        transition: all 0.3s ease;
      }
      input[type="submit"] {
        border: 1px solid aqua;
      }
      input[type="text"]:focus,
      input[type="submit"]:hover {
        outline: none;
        border-color: cyan;
        background-color: #2a2a2a;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <img src="assets/head.png" alt="" height="150px" />

    <?php
      echo "Hello, " . $_POST['username'];
    ?>
  </body>
</html>
