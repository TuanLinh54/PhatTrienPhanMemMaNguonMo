<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHÀO THEO GIỜ</title>
</head>
<style>
    .form-table{
        text-align: center;
        background-color: aquamarine;
    }
    .title{
        background-color: #196e6e;
    }

</style>
<body>
<div class="form-table">
    <form action="" method="post">
        <div class="title">
            <h1>CHÀO THEO GIỜ</h1>
        </div>
                <input type="text" name="txtGio" value="<?php if(isset($_POST['txtGio']) 
                && $_POST['txtGio'] != NULL){ echo $_POST['txtGio']; } ?>"><br>

        <?php
            if (isset($_POST["txtGio"]))
            {
                $gio = $_POST["txtGio"];

                if ($gio <12)
                    $chao = "Chào buổi sáng";
                else if ($gio <17)
                    $chao ="Chào buổi chiều";
                else
                    $chao ="Chào buổi tối";
                echo $chao;
            }
        ?>
                <br><input type="submit" value="Chào">
        

    </form>
</div>
</body>
</html>