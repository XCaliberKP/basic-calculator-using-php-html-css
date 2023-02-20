<?php
if (isset($_POST['res'])) {
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $op = $_POST['res'];
    if ($op == "+") {
        $result = $num1 + $num2;
    } elseif ($op == "-") {
        $result = $num1 - $num2;
    } elseif ($op == "x") {
        $result = $num1 * $num2;
    } elseif ($op == "/") {
        $result = $num1 / $num2;
    }
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <title>title</title>
    <style type="text/css">
        .container
        {
            background-color: cyan;
            left : 35px;
            padding: 70px;
            text-align: center;
            border : 2px solid darkorchid;
        }
        input
        {
            width: 40%;
            padding: 14px 21px;
            margin: 7px 0;
            display: inline-block;
            border : 2px solid deeppink;
            border-radius: 7px;
            box-sizing: border-box;
        }
        input[type=submit]
        {
            width : 7%;
            background-color: black;
            color: antiquewhite;
            padding: 14px 21px;
            margin: 7px 0;
            border: none;
            border-radius: 7px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Simple Calculator</h1>
            First Number: <input name="n1" value=""><br>
            Second Number: <input name="n2" value=""><br>
            <input type="submit" name="res" value="+">
            <input type="submit" name="res" value="-">
            <input type="submit" name="res" value="x">
            <input type="submit" name="res" value="/"><br><br>
            Result: <input type="text" value="<?php echo $result; ?>"><br>
        </form>
    </div>

</body>

</html>