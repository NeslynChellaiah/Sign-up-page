<?php 
$sname = "localhost";
$uname = "root";
$pwd = "";
$db = "signup";

$a = $_POST["email"];
$b = $_POST["password"];
$extra = array('email' => $a,'password' => $b);
$d = json_encode($extra);
$new = file_get_contents('signup.json');
$c = json_decode($new);
// $c[] = $extra;
array_push($c, $extra);
$c = json_encode($c);
file_put_contents('signup.json', $c);

$con = mysqli_connect($sname,$uname,$pwd,$db);
$qur = "INSERT INTO signdetails(Uname,pwd) VALUES ('$a','$b')";
mysqli_query($con,$qur);
echo "success";
?>




























































































































































































































































































































































































































































































































































































































































































































































































































































































































echo $a,$b;
 ?>