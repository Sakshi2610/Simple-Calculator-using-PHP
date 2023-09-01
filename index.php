<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="text-align:center; margin-top: 15%; font-weight:bold" >
    <?php
        if(isset($_POST['calc'])){
            $num1 = (int)$_POST['n1'];
            $num2 = (int)$_POST['n2'];
            $operand = $_POST['calc'];

            if($operand == "+")
                $ans = $num1 + $num2;
            elseif($operand == "-")
                $ans = $num1 - $num2;
            elseif($operand == "*")
                $ans = $num1 * $num2;
            elseif($operand == "/")
                $ans = $num1 / $num2;
            elseif($operand == "%")
                $ans = $num1 % $num2;
        }
    ?>

    <form method="post" action="" >
        <h1>Simple Calculator</h1><br>

        Enter First Number : <input type="number" name="n1" value=" " required="required"><br><br>
        Enter Second Number : <input type="number" name="n2" value=" " required="required"><br><br>
        <input type="submit" name="calc" value="+">
        <input type="submit" name="calc" value="-">
        <input type="submit" name="calc" value="*">
        <input type="submit" name="calc" value="/">
        <input type="submit" name="calc" value="%"><br><br>
        Result : <?php echo "The calculation is ".$ans; ?>
    </form>

</body>
</html>