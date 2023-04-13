<?php
$department=$_POST['department'];
$Date=$_POST['date'];
$count=$_POST['count'];

$conn =mysqli_connect('localhost','root','','asset');
	$sql = "insert into toner(department,date,count)values('$department','$Date','$count')";
	$a=mysqli_query($conn,$sql);
	if($a){
		echo "successful";
	}else{
		echo "not successful";
	}

  //print_r($_POST);
  
?>

  