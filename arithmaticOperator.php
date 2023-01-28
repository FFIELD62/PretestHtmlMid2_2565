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

        position : relative;
        Top: 20%;
        left : 40%;
    }
</style>

<boby>
<form action="arithmaticOperator.php" method="post" name="form1" id="form1">
    
    <h1>ArithmaticOperator</h1>

    Enter Number 1<input type="text" name="num[]" maxlength="10" value=""/><br /> 
    Enter Number 2<input type="text" name="num[]" maxlength="10" value=""/><br /> 
    Enter Number 3<input type="text" name="num[]" maxlength="10" value=""/><br /> 

    Operator :  <input type="radio" name="Operator1" value="plus" /> + <br />
                <input type="radio" name="Operator1" value="minus" /> - <br />
                <input type="radio" name="Operator1" value="multiply" /> * <br />
                <input type="radio" name="Operator1" value="divide" /> / <br />
                <input type="radio" name="Operator1" value="mod" /> % <br /> <br />


    <br />
    <input type="SUBMIT" name="SUBMIT" value="SUBMIT" /> 
    <input type="reset" name="reset" value="Reset" />  

    <h1>Result</h1>


</form>

        <?php 
            if(isset($_POST['SUBMIT'])) {
            $num = $_POST['num'];
            $Operator1 = $_POST['Operator1'];
            $result = 0;

        ?>

        <?php 
            echo "Number 1 : ".$num[0]."<br>";
            echo "Number 2 : ".$num[1]."<br>";
            echo "Number 3 : ".$num[2]."<br>"; 

            if ($Operator1 == "plus") {
                function plus($num) {
                    echo "Operator1 : + <br>"; 
                    $result = $num[0] + $num[1] + $num[2];
                    echo "Result : ". $num[0]. "+" .$num[1]. "+" .$num[2]." = " .$result."<br>";
                }  
                plus($num);
            }
            if ($Operator1 == "minus") {
                function minus ($num) {
                    echo "Operator1 : - <br>"; 
                    $result = $num[0] - $num[1] - $num[2];
                    echo "Result : ".$num[0]. "-" .$num[1]. "-" .$num[2]." = " .$result."<br>";
                }
                minus ($num);
            }
            if ($Operator1 == "multiply") { 
                function multiply  ($num) {
                    echo "Operator1 : * <br>"; 
                    $result = $num[0] * $num[1] * $num[2];
                    echo "Result : ".$num[0]. "*" .$num[1]. "*" .$num[2]." = " .$result."<br>" ;
                }
                multiply  ($num);
            }

            if ($Operator1 == "divide") {
                function divide ($num) {
                    echo "Operator1 : / <br>"; 
                    $result = $num[0] / $num[1] / $num[2];
                    echo "Result : ".$num[0]. "/" .$num[1]. "/" .$num[2]." = " .$result."<br>";
                }
                divide ($num);
            }

            if ($Operator1 == "mod") {
                function mod ($num) {
                echo "Operator1 : % <br>"; 
                $result = $num[0] % $num[1] % $num[2];
                echo "Result : ".$num[0]. "%" .$num[1]. "%" .$num[2]." = " .$result."<br>";
                }
                mod ($num);
            }
        
        }
            ?>


</boby>

</html>