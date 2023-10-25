<!DOCTYPE html>
<html lang="en">
<head>
    <h1>insert data  into our table
</head>
<body>
    <center>
        <?php
        require "dbconnect.php";
        $Title=$_REQUEST['title'];
        $Author=$_REQUEST['author'];
        $Year=$_REQUEST['year'];
        $sql="INSERT INTO books (title, author, year) VALUES('$Title','$Author','$Year')";
        if($conn->query($sql)===true){
            echo"Book added succesfully";
        }
        else{
            echo"error";
        }
        ?>
        </center>
    
</body>
</html>