<?php 

$server="sql108.epizy.com";
$username="epiz_29464101";
$password="2tuoeGkDMI";
$dbname="epiz_29464101_websitedb";










$con = mysqli_connect($server,$username,$password,$dbname);
// for connection we are making a variable con and telling that we have localhost as server and the username is bydefalut root.

if($con)
	// if the connection is done with the mysqi_server then "Connection successful"
{
	echo "Connection successful";
}
else
{
	echo "No Connection";
}

mysqli_select_db($con, 'userinfodata');
// Like in cmd we say "use userdata" here in php we use it like this above shown: 

$user = $_POST['user'];
// so here we are using the method POST, SO whenever the user will submit the data it will get store in "$user" variable.

// see more about POST method in google. 

$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user,email,mobile,comment) values ('$user','$email','$mobile','$comments') ";



echo "$query";

mysqli_query($con,$query );

header('location:index.php');
// after submitting  it should reside on that page only that is index page or home page..