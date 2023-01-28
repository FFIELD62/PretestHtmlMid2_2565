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
<form action="calculateArea.php" method="post" name="form1" id="form1">
    <center>
    <h1>การคำนวณหาพื้นที่</h1>

    <input type="text" name="width" maxlength="10" value=""/><br /> <br />
    <input type="text" name="length" maxlength="10" value=""/><br />  <br />
    <input type="radio" name="area" value="สี่เหลี่ยมจตุรัส" /> สี่เหลี่ยมจตุรัส <br />
    <input type="radio" name="area" value="สี่เหลี่ยมผืนผ้า" /> สี่เหลี่ยมผืนผ้า <br />
    <input type="radio" name="area" value="สี่เหลี่ยมขนมเปียกปูน" /> สี่เหลี่ยมขนมเปียกปูน <br />
    <input type="radio" name="area" value="สามเหลี่ยม" /> สามเหลี่ยม <br />
    <br />
    <input type="SUBMIT" name="SUBMIT" value="SUBMIT" /> 
    <input type="reset" name="reset" value="Reset" />  
</center>

</form>

    <?php
        if(isset($_POST['SUBMIT'])) {
        $width = $_POST['width'];
        $length = $_POST['length'];
        $geo = $_POST['area'];



        ?>

        <?php 
            if ($geo == "สี่เหลี่ยมจตุรัส") {
                function Square($width) {
                    $result = $width * $width;
                    echo "พื้นที่สีเหลี่ยมจตุรัส : ".$result."<br>"; 
                }  
                Square($width);
            }
            if ($geo == "สี่เหลี่ยมผืนผ้า") {
                function Rectangle ($width, $length) {
                    $result = $width * $length;
                    echo "พื้นที่สี่เหลี่ยมผืนผ้า : ".$result."<br>"; 
                }
                Rectangle ($width, $length);
            }
            if ($geo == "สี่เหลี่ยมขนมเปียกปูน") { 
                function Rhombus  ($width, $length) {
                    $result = $width * $length;
                    echo "พื้นที่สี่เหลี่ยมขนมเปียกปูน : ".$result."<br>"; 
                }
                Rhombus  ($width, $length);
            }
            if ($geo == "สามเหลี่ยม") {
                function Triangle ($width, $length) {
                $result = (1/2) * $width * $length;
                echo "พื้นที่สามเหลี่ยม : ".$result."<br>"; 
                }
                Triangle ($width, $length);
            }
        }
            ?>


</boby>

</html>