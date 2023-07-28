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
        <input type="file" name="File" placeholder="upload image:"><br><br>
        <input type="submit" name="sbmt"><br><br>

    </form>

    <?php
    {
        $nm=$_POST['name'];
        $em=$_POST['email'];
        $mb=$_POST['mob'];
        $fltm=$_FILES['File']['tmp_name'];
        $folder ="img/"$_FILES['File']['name'];

        move_uploaded_file($fltm,$folder);
    ?>

    <table>
        <tr>
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