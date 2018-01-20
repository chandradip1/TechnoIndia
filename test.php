<?php
$name=$_POST['name'];
$add=$_POST['add'];
$pin=$_POST["pin"];
$dist=$_POST["dist"];
$state=$_POST["state"];
$phone=$_POST["phone"];
$mob=$_POST["mob"];

$email=$_POST["email"];
$web=$_POST["web"];
$dob=$_POST["dob"];
$pob=$_POST["pob"];
$blood=$_POST["blood"];
$sex=$_POST["sex"];
$nation=$_POST["nation"];
$pass=$_POST["pass"];
$caste=$_POST["caste"];
$rel=$_POST["rel"];

if(isset($_POST['btn'])){
 $con = new MySQLi("localhost","root","","technoindia");
	   if($con->connect_error) die($con->connect_error);
	   else {
		   
		   $sql="insert into student(name,add,pin,dist,state,phone,mob,email,web,dob,pob,blood,sex,nation,pass,caste,rel)values('$name','$add','$pin','$dist','$state','$phone','$mob','$email','$web','$dob','$pob','$blood','$sex','$nation','$pass','$caste','$rel')";
		   $con->query($sql);
		   $r = $con->affected_rows;
		   if($r==1)
		   echo "You have Successfully Registered With Us";
		   else
		   echo "Unable to Add Records !";
		   }
		   $con->close();
		   



}

echo "$name";
echo "<br>";
echo "$email";
echo"<br>";
echo "$mob";
echo"<br>";
echo"$blood";
echo"<br>";
echo"$sex";




?>
my first change