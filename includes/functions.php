<?php
  $user = "root";
  $pass = "root"; //this should be
  $host = "localhost";
  $db = "db_cooperinfo"; //whatever you called your database

  $con = mysqli_connect($host, $user, $pass, $db);
  mysqli_set_charset($con,'utf8');

  // if(!$con) {
  //   echo "Something broke...";
  //   exit;
  // } echo "connected";

  // $myQuery = "SELECT * FROM mainmodel";
  // $result = mysqli_query($con, $myQuery);
  //
  // $rows = array();
  // while($row = mysqli_fetch_assoc($result)) {
  //   $rows[] = $row;
  // }
  // var_dump($rows);
  // echo json_encode($rows);

  //get a single row (one result) using a query parameter
  if(isset($_GET['carModel'])) { //see if there's a parameter called carModel
    $car = $_GET['carModel'];

    $myQuery = "SELECT * FROM mainmodel WHERE model = '$car'";
    $result = mysqli_query($con, $myQuery);

    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
  }

  if(isset($_GET['getVideos'])) { //see if there's a parameter called carModel

    $myQuery = "SELECT * FROM video";
    $result = mysqli_query($con, $myQuery);

    $rows = array();

    while($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }

    echo json_encode($rows);
  }


 ?>
