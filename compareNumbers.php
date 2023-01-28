<html>
<head>
    <title> การคำนวณหาพื้นที่ </title>
</head>
<style>
    body {
        background-image: url(BG.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>

<boby>
<form action="compareNumbers.php" method="post" name="form1" id="form1">
    <center>
    <h1>การคำนวณหาเลขมากสุดและน้อยสุด</h1>

    P1<input type="text" name="num[]" maxlength="10" value=""/><br /> 
    P2<input type="text" name="num[]" maxlength="10" value=""/><br /> 
    P3<input type="text" name="num[]" maxlength="10" value=""/><br /> 
    P4<input type="text" name="num[]" maxlength="10" value=""/><br /> 
    P5<input type="text" name="num[]" maxlength="10" value=""/><br />  <br />


    <br />
    <input type="SUBMIT" name="SUBMIT" value="SUBMIT" /> 
    <input type="reset" name="reset" value="Reset" />  
</center>

</form>

<?php 
            if(isset($_POST['SUBMIT'])) {
            $num = $_POST['num'];
            $num1 = $_POST['num'];
            $sum = 0;

            for($i = 0; $i < 5; $i++){
                $sum = $sum + $num[$i];
            }

            rsort($num);
            sort($num1);




        ?>

        <h1>Result</h1>

        <?php 

            echo "Max to Min : ";
            for ($i=0; $i < 5; $i++) { 
                echo $num[$i].", ";
            }
            echo "<br>";

            echo "Min to Max: "; 
            for ($i=0; $i < 5; $i++) { 
                echo $num1[$i].", ";
            }
            echo "<br>";
            
            echo "Max : ".max($num)."<br>";
            echo "Min : ".min($num)."<br>";
            echo "Sum : ".$sum."<br>";           
        }
            ?>


</boby>

</html>