<?php 
include 'config.php';
$action="";
if(isset($_POST['action']))
{
    $action=$_POST['action'];
}
if(isset($_GET['action']))
{
    $action=$_GET['action'];
}
switch($action)
{
    case 'create':
        $fname=mysqli_escape_string($db_conn, $_POST['FirstName']);
        $lname=mysqli_escape_string($db_conn, $_POST['LastName']);
        $phone=mysqli_escape_string($db_conn, $_POST['Phone']);
        $country=mysqli_escape_string($db_conn, $_POST['Country']);

        $sql="insert into customer (FirstName, LastName, PhoneNo, Country)
                values ('$fname','$lname','$phone','$country')";
        $db_conn->query($sql);
        header("Location:read.php");
     break;
     case 'update':
        $fname=mysqli_escape_string($db_conn, $_POST['FirstName']);
        $lname=mysqli_escape_string($db_conn, $_POST['LastName']);
        $phone=mysqli_escape_string($db_conn, $_POST['Phone']);
        $country=mysqli_escape_string($db_conn, $_POST['Country']);
        $cust_id=mysqli_escape_string($db_conn, $_POST['cust_id']);

        $sql="update customer set FirstName='$fname', LastName='$lname', PhoneNo='$phone', Country='$country' where customer_id=$cust_id";
        $db_conn->query($sql);
        header("Location:read.php");
     break;
     case 'delete':
        $cust_id=mysqli_escape_string($db_conn, $_GET['cust_id']);

        $sql="delete from customer where customer_id=$cust_id";
        $db_conn->query($sql);
        header("Location:read.php");
     break;
}
?>