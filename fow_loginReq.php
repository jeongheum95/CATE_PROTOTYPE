<?php

error_reporting(E_ALL);

ini_set("display_errors", 1);

$con = mysqli_connect('localhost', 'id9846685_kcy', 'gim1855', 'id9846685_capston');

     $userID = $_POST["userID"];
     $userPassword = $_POST["userPassword"];

     $statement = mysqli_prepare($con, "SELECT * FROM user WHERE userId = ? AND userpassword = ?");
     mysqli_stmt_bind_param($statement, "ss", $userID, $userPassword);
     mysqli_stmt_execute($statement);
     mysqli_stmt_store_result($statement);
     mysqli_stmt_bind_result($statement, $userID, $userPassword, $userName );

     $response = array();
     $response["success"] = false;

     while(mysqli_stmt_fetch($statement)){
      $response["success"] = true;
      $response["userID"] = $userID;
      $response["userPassword"] = $userPassword;
      $response["userName"] = $userName;
     }



     echo json_encode($response);

?>
