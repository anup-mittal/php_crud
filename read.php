<?php
session_start();
$_SESSION['myvalue']='abc';

include 'config.php';

$sql="select * from customer";
$result=$db_conn->query($sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <center>
    <a href="create.php">Add+</a>
    <table border="1">
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Phone No.</th>
            <th>Country Name</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        while($row=mysqli_fetch_object($result))
        {
        ?>
            <tr>
            <td><?php echo $row->FirstName; ?></td>
            <td><?php echo $row->LastName; ?></td>
            <td><?php echo $row->PhoneNo; ?></td>
            <td><?php echo $row->Country; ?></td>
            <td><a href="update.php?cust_id=<?php echo $row->customer_id; ?>">Update</a></td>
            <td><a href="crud_processor.php?action=delete&cust_id=<?php echo $row->customer_id; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

