<?php 
    include "./config.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql = "insert into `person`(`name`, `email`, `phone`) values('$name','$email','$phone')";
        // $sql = "INSERT INTO `person`(`name`, `email`, `phone`) VALUES ('$name','$email','$phone')";
        $results = $conn->query($sql);
        echo "Saved Successfully !..";
    }
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="text" name="email" placeholder="Enter Email">
        <input type="text" name="phone" placeholder="Enter Phone">
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="./index.php">Home</a>
</body>
</html>