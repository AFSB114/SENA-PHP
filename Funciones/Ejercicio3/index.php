<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'library/process.php';
    $num1 = 10;
    $num2 = 5;
    var_dump(operacion('+',$num1,$num2));
    var_dump(operacion('-',$num1,$num2));
    var_dump(operacion('*',$num1,$num2));
    var_dump(operacion('/',$num1,$num2));
    ?>
</body>
</html>