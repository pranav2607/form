<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Name:"><br><br>
        <input type="email" name="email" placeholder="Email:"><br><br>
        <input type="number" name="mob" placeholder="Mobile:"><br><br>
        <input type="file" name="file" placeholder="upload image:"><br><br>
        <input type="submit" name="sbmt"><br><br>

    </form>

    <?php
    if(isset($_POST['sbmt']))
    {
        $nm=$_POST['name'];
        $em=$_POST['email'];
        $mb=$_POST['mob'];
        $fltnm = $_FILES['file']['tmp_name'];
        $folder ='img/'.$_FILES['file']['name'];

        move_uploaded_file($fltnm,$folder);
    ?>

    <table border>
        <tr align="center">
            <td><img src='<?php echo $folder;?>' width="100px" height="100px"></td>
        </tr>

        <tr>
            <td>Name : <?php echo $nm;?></td>
        </tr>
        
        <tr>
            <td>Email : <?php echo $em;?></td>
        </tr>

        
        <tr>
            <td>Mobile : <?php echo $mb;?></td>
        </tr>
    </table>
    <?php } ?>
</body>
</html>