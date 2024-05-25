<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Feedbacks</title>
</head>
<body>  
    <h1>View All Feedbacks</h1>  
    <?php
        include('conn.php');
        $sql="select * from feedback";
        $result=mysqli_query($conn,$sql);
        echo"<table border=1px>";
        echo "<tr><th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th><th>email</th><th>mobileno</th><th>Description</th></tr>";
        while($line=mysqli_fetch_array($result))
        {   
            echo "<tr>";
            echo "<td>";
            echo $line['id'];
            echo "</td>";
            echo "<td>";
            echo $line['fname'];
            echo "</td>";
            echo "<td>";
            echo $line['lname'];
            echo "</td>";
            echo "<td>";
            echo $line['email'];
            echo "</td>";
            echo "<td>";
            echo $line['mobileno'];
            echo "</td>";
            echo "<td>";
            echo $line['description'];
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
