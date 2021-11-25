<?php
require 'connection.php';
$conn = Connect();

session_start();

if(isset($_SESSION['login_user1'])){
$user_check=$_SESSION['login_user1'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT username FROM MANAGER WHERE username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];



$queryy = "SELECT name FROM restaurants WHERE M_ID = '$user_check' ";
$ses_sqll = mysqli_query($conn, $queryy);
$rowww = mysqli_fetch_assoc($ses_sqll);
if(isset($rowww))
$resturantname=$rowww['name'];
}

if(isset($_SESSION['login_user2'])){
$user_check=$_SESSION['login_user2'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT username FROM CUSTOMER WHERE username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(isset($rowww))
$usr=$rowww['name'];
}



?>