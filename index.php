<?php 
    include "./config.php";
    $sql = "select * from person";
    $result = $conn->query($sql);

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
    <a href="./add.php">Add New</a>
    <table border="1">
        <tr>
            <td>Serial</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Update</td>
            <td>Delete</td>
        </tr>
<?php 
    // foreach($results as $result){ 
    // while($data = mysqli_fetch_array($results)){
    // for($i=0;$i<=$row = $result->fetch_assoc(); $i++){
    for($i=0;$i<=$row = mysqli_fetch_array($result); $i++){
        
    ?>
        <tr>
            
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
           
            <td><a href="./update.php?id=<?php echo $rows['id']; ?>">Update</a></td>
            <td><a href="./delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
        </tr>
<?php } ?>
    </table>
</body>
</html>