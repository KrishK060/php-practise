<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// define("cars", [
//   "Alfa Romeo",
//   "BMW",
//   "Toyota"
// ]);

// echo cars[1];

// const mycar = "bus";
// echo mycar;

// define("greeting","good morning");

// function mytest(){
//  echo greeting;
// }
// mytest();

// class fruits{
//     public function fruit(){
//         return __class__;
//     }
// }
// $kiwi = new fruits();
// echo $kiwi->fruit();

// echo __DIR__;

// echo __FILE__

// function value(){
//     return __FUNCTION__;
// }
// echo value();

// echo __LINE__

class fruits{
    public function fruit(){
        return __method__;
    }
}
$kiwi = new fruits();
echo $kiwi->fruit();

?>

</body>
</html>