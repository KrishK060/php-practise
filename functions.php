<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// function add(&$value){
//     $value+= 5;
// }
// $num=2;
// add($num);
// echo $num;

// function addNum(float $a,float $b):float{
//     return $a + $b;
// }
// echo addNum(1.2,5.4);

// function addNum(float $a, float $b): bool {
//     return $a > $b;
// }

// var_dump(addNum(1.2, 5.4));

function addNum(float $a, float $b):float{
    return (int)$a + $b;
}

var_dump(addNum(1.2, 5.4));
?>
</body>
</html>