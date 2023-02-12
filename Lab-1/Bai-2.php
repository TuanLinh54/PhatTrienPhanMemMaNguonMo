<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1_Bai2</title>
</head>
<style>
    body{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        height: 100%;
        background-color: #b5de87;
    }
    .title{
        background-color: cadetblue;
        text-align: center;
    }
    .ht{
        margin: 0 0 10px 25px;
    }
    .em{
        margin: 0 0 10px 35px;
    }
    .nd{
        margin: 0 0 10px 14px;
        padding: 0 8px 80px 0
    }
</style>
<body>
<div>
    <form action="" method="post">
        <div class="title">
            <h3>GỬI Ý KIẾN</h3>
        </div>
        <table>
            Họ Tên:<input class="ht" type="text" name="txtHoTen"><br>
            Email:<input class="em" type="text" name="txtEmail"><br>
            Nội dung:<input class="nd" type="textarea" name="txtNoiDung"><br>
            <input type="submit">
        <h3>DANH SÁCH Ý KIẾN</h3>
        <?php
        if (isset($_POST["txtHoTen"]))
        {
            $file = fopen("data.txt","a");
            $ht = $_POST["txtHoTen"];
            $email = $_POST["txtEmail"];
            $nd =$_POST["txtNoiDung"];

            $dong = "\r\n".$ht."\t".$email."\t".$nd;

            fputs($file,$dong);
            fclose($file);
        }
        $file = fopen("data.txt","r");
        while (!feof($file))
        {
            $line = fgets($file);

            if ($line =="\r\n") continue;
            $strArr = explode("\t",$line);
            $str = "";

            foreach ($strArr as $s)
            $str .= "$s<br \>";

            echo "<tr bgcolor=\"#FF8040\" ><td colspan=\"2\">$str </td></tr>";
        }
        ?>
        </table>
    </form>
</div>
</body>
</html>