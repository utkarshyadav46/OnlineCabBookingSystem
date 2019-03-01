<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="gola";
$conn = mysqli_connect($servername, $username, $password);
$sql = "CREATE DATABASE gola ";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} 
$a="use gola";
if(mysqli_query($conn, $a))
{
$create="Create table logintable(username varchar(30),password varchar(30),email varchar(30) primary key,phone bigint(20),Cx int(10),Cy int(10) ,Forgot_password int(10) default 0 )";
if (mysqli_query($conn, $create)) {
    echo "Table logintable created successfully";
}
else{
	echo "h";
}
$create1="Create table drivers(id int(10) primary key, D_name varchar(30),D_email varchar(25),password varchar(30),D_phone bigint(10),D_location varchar(100),D_salary int(08),Dx int(10),Dy int(10))";
if (mysqli_query($conn, $create1)) {
    echo "Table drivers created successfully";
}
else {
	echo "j";
}
$create2="Create table feedback( Name varchar(30),Tourist_email varchar(25),rating int(11),suggestion varchar(1000))";
if (mysqli_query($conn, $create2)) {
    echo "Table feedback created successfully";
}
else {
	echo "k";
}
$create3="create table travel_history(Tourist_name varchar(30),Starting_point varchar(40),Destination varchar(30),Fare int(11),Driver_id  varchar(15),Status varchar(10),Dsalary int (6) )";
if (mysqli_query($conn, $create3)) {
    echo "Table travel_history created successfully";
}
else {
	echo "l";
}
}

$conn->close();
?>