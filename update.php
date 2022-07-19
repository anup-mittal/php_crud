<?php
include 'config.php';
$cust_id=0;
if(isset($_GET['cust_id']))
{
    $cust_id=$_GET['cust_id'];
}
else
{
    header("Location:read.php");
}
$sql="select * from customer where customer_id=$cust_id";
$result=$db_conn->query($sql);
$row=mysqli_fetch_object($result);

?>
<html>
<body>
    <center>
        <form name="frm1" action="crud_processor.php" method="post">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="cust_id" value="<?php echo $row->customer_id; ?>">
            <table>
                <tr><td>First Name</td><td><input type="text" name="FirstName" value="<?php echo $row->FirstName; ?>"></td></tr>
                <tr><td>Last Name</td><td><input type="text" name="LastName" value="<?php echo $row->LastName; ?>"></td></tr>
                <tr><td>Phone</td><td><input type="text" name="Phone" value="<?php echo $row->PhoneNo; ?>"></td></tr>
                <tr><td>Country</td><td><input type="text" name="Country" value="<?php echo $row->Country; ?>"></td></tr>
            </table>
                <input type="submit" value="Update">
        </form>
    </center>
</body>
</html>