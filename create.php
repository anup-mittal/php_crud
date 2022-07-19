<?php
session_start();
echo $_SESSION['myvalue'];
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
        <form name="frm1" action="crud_processor.php" method="post">
            <input type="hidden" name="action" value="create">
            <table>
                <tr><td>First Name</td><td><input type="text" name="FirstName" class="form-control"></td></tr>
                <tr><td>Last Name</td><td><input type="text" name="LastName" class="form-control"></td></tr>
                <tr><td>Phone</td><td><input type="text" name="Phone" class="form-control"></td></tr>
                <tr><td>Country</td><td><input type="text" name="Country" class="form-control"></td></tr>
            </table>
                <input type="submit" value="Add+" class="btn btn-primary">
        </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
