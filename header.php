<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <?php
      require("connect.php");
      $sql = "Select * from person";
      mysqli_set_charset($conn,'UTF8');
      $result = mysqli_query($conn,$sql);
    ?>
    <div class="container">
      <div class="wrap">
        <div class="header">
          <div class="row">
            <div class= "col-md-10"><img src="../img/logo_khoa.jpg" alt="logo"></div>
            <div class="col-md-2"><button class="btn_logout"><a href="../logout.php"> <i class="icon-key"></i>Đăng Xuất</a></button></div>
          </div>
        </div>
        <hr></hr>
      </div>