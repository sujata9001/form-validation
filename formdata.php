<?php
session_start();
//create connection
$conn=mysqli_connect('localhost','root','pass1234','registerstu');
//check connection
if($conn)
{
	echo "connection sucessfully";
}
else
{
	echo "connection failed";
}
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$pass=$_POST['password'];
$conpass=$_POST['confirmpass'];
$ge=$_POST['gender'];
$email=$_POST['emailadd'];
$phone=$_POST['phonenum'];
$add=$_POST['address'];
// $q="select * from registerdata where firstname='$fname' && lastname='$lname' && password='$pass' && confirmpass='$conpass' && gender='$ge' && email='$email' && phonenum='$phone' && address='$add'";
// $result=mysqli_connect($conn,$q);
if ($_POST["password"] === $_POST["confirmpass"])
{
	if($fname!="" && $lname!="" && $pass!="" && $conpass!="" && $ge!="" && $email!="" && $phone!="" && $add!="")
	{

	    $qy="insert into registerdata(firstname,lastname,password,confirmpass,gender,emailadd,phonenum,address) values('$fname','$lname','$pass','$conpass','$ge','$email','$phone','$add')";
	    $data=mysqli_query($conn,$qy);

	    if($data)
	    {
		   echo "data inserted into database";
	    }

	    else{
		    echo "failed";
	    }
    }
    else
    {
	   echo "<script>alert('please fill the form');</script> ";
    }
}
else
{
	echo "password does not match";
}
?>