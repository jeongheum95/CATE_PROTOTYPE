<?php

$con = mysqli_connect('localhost', 'id9846685_kcy', 'gim1855', 'id9846685_capston');

$userid = $_POST['Id'];

$result = mysqli_query($con, "SELECT videoid,videotitle,videourl from video where userid='$userid';");
$response = array();//배열 선언

while($row = mysqli_fetch_array($result)){
 //response["userID"]=$row[0] ....이런식으로 됨.

array_push($response, array("id"=>$row[0],"title"=>$row[1],"url"=>$row[2]));
 }
 //response라는 변수명으로 JSON 타입으로 $response 내용을 출력

echo json_encode(array("response"=>$response));

mysqli_close($con);
 ?>
