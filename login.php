<?php
$uid=$_POST['uid'];
$upassword = $_POST['upassword'];
$uname = $_POST['uname'];
$utel = $_POST['utel'];
$uemail = $_POST['uemail'];
$ucity = $_POST['sel'];

include('./db_conn.php');

$query = "insert into php2(uid,upassword,uname,utel,uemail,ucity) values('$uid','$upassword','$uname','$utel','$uemail','$ucity')";
mysqli_query($conn, $query);
echo "<script>alert('가입되었습니다')</script>";
?>
<meta http-equiv="refresh" content="0; url=http://localhost/PHP_%EC%88%98%ED%96%89%ED%8F%89%EA%B0%80(2%ED%95%99%EA%B8%B0)/login2.html">