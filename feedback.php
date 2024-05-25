<?php

use function Safe\mysql_query;

include('conn.php');

if(isset($_POST['register']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobileno=$_POST['mobileno'];
    $description = $_POST['description'];

    $sql = "INSERT INTO feedback(fname,lname,email,mobileno,description)VALUES('".$fname."','".$lname."','".$email."','".$mobileno."','".$description."')";
    $res = mysqli_query($conn,$sql);

    if($res)
    {
        echo "Insert Success!!!";
    }
    else
    {
        echo "Not insert!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="text-center">Feedback Form</h3>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name:</label>
                                <input type="text" class="form-control" name="fname" placeholder="Enter your First name">
                            </div>
                            <div class="col-md-6">
                                <label>Last Name:</label>
                                <input type="text" class="form-control" name="lname" placeholder="Enter your Last name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="someone@gmail.com">
                            </div>
                            <div class="col-md-6">
                                <label>Mobile number:</label>
                                <input type="number" class="form-control" name="mobileno" placeholder="00000 00000">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Description:</label>
                                <textarea class="form-control" rows="3" name="description">
                                </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-primary" name="register">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
