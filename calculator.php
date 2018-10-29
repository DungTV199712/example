<!DOCTYPE HTML>
<html>
<head></head>
<body>
<?php
try {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operator = $_POST["operator"];
    switch ($operator) {
        case ("+"):
            $result = $number1 + $number2;
            break;
        case ("-"):
            $result = $number1 - $number2;
            break;
        case ("*"):
            $result = $number1 = $number2;
            break;
        case ("/"):
            if ($number2 == 0) {
                throw new Exception("loi khong xac dinh, vui long nhap lai");
            } $result = $number1 / $number2;
            break;
    }
    echo $result;
} catch(Exception $e) {
    echo $e->getMessage();
}
?>
</body>
</html>