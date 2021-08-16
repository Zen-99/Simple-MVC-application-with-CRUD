<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
</head>
<body>
<center>
    <!--Registration form-->
    <h1>Student Registration Form</h1>
    <!--search-->
<form action="../view/result.php" method="GET">
        <input type="text" id="txtSearch" name="txtSearch" value="search" required/>
        <input type="submit" name="Search" value="Search Student">
    </form>
    <br>
    <!--delete-->
    <form action="../view/messages.php" method="GET">
    <input type="text" id="txtSearch" name="txtSearch" value="Add name here to delete" required/>
    <input type="submit" name="delete" value="Delete Student">
    </form>
    <br>
    <!--view table-->
    <form action="../view/result.php" method="GET">
        <input type="submit" name="ok" value="view table">
    </form>
    <br>
    <br>
    <br>
    <br>
    <!--insert and update-->
    <h1>Registration</h1>
    <form action="../view/messages.php" method="GET">
    <input type="text" id="txtIndex" name="txtIndex" value="Index Number" required/><br><br>
    <input type="text" id="txtName" name="txtName" value="Name" required/><br><br>
    <input type="text" id="txtAge" name="txtAge" value="Age" required/><br><br>
    <input type="text" id="txtTel" name="txtTel" value="Mobile" required/><br><br>
    <input type="submit" name="insert" value="Insert Details">
    <input type="submit" name="update" value="Update Details">
    </form>
    
</center>
</body>
</html>
