<?php
error_reporting(E_ALL);

ini_set("display_errors", 1);



$con = mysqli_connect('localhost', 'id9846685_kcy', 'gim1855', 'id9846685_capston');



mysqli_set_charset($con,"utf8");



if (mysqli_connect_errno($con))

{

   echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$userid = $_POST['Id'];

$userpw = $_POST['Pw'];

$username=$_POST['Name'];

if($userid==null){
  echo "아이디를 입력하시오.";
  return 0;
}
else if($userpw==null){
  echo "비밀번호를 입력하시오.";
  return 0;
}
else if($username==null){
  echo "이름을 입력하시오.";
}
else{
$result = mysqli_query($con,"insert into user (userid,userpassword,username) values ('$userid','$userpw','$username')");
}


  if($result){

    echo '회원가입에 성공하셨습니다.';

  }

  else{

    echo '동일한 아이디가 존재합니다.';

  }



mysqli_close($con);

?>
