<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <table>
        <tr>
            <th>First</th>
            <th>Last</th>
            <th>Action</th>
        </tr>

        <?php
    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, 'init') or die(mysqli_error($conn));
    $sql = "SELECT id, firstname, lastname FROM users";
    $res = mysqli_query($conn, $sql);
    if($res == true) {
        $count_rows = mysqli_num_rows($res);
        if($count_rows > 0) {
            while($rows = mysqli_fetch_assoc($res)){
                $id = $rows['id'];
                $fn = $rows['firstname'];
                $ln = $rows['lastname'];
                ?>
                
                <tr>
                    <td><?php echo $fn; ?></td>
                    <td><?php echo $ln; ?></td>
                    <td><a href="cart.php?id=<?php echo $id; ?>">sdasd</a></td>
                </tr>

                <?php
            }
        }
    }
?>
    </table>

</body>