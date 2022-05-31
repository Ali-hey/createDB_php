<?php
$conn=mysqli_connect('localhost','root','','php_test');
$sql="SELECT * FROM users_tbl";
$result=mysqli_query($conn,$sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table class="maintbl">
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Picture</th>
        </tr>

    <?php
        while($row=mysqli_fetch_assoc($result)){
            //var_dump($row);
    ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['lastname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><img src="<?php echo $row['picture']; ?>" height="30" /></td>
        </tr>
    <?php
        }
    ?>


    </table>
</body>
</html>
