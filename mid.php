<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background : red;
    }
</style>

<body>

<form action="mid.php" method="post" name="form1" id="form1">
    P1<input type="text" name="num[]" maxlength="10" value=""/><br /> 
    P2<input type="text" name="num[]" maxlength="10" value=""/><br /> 

    <input type="SUBMIT" name="SUBMIT" value="SUBMIT" />
</form>

<?php 
        if(isset($_POST['SUBMIT'])) {
        $num = $_POST['num'];
        $sum = $num[0]+$num[1];

        echo "Sum : ".$sum."<br>" ;
        }

        ?>

</body>
</html>