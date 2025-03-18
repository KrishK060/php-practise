<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    // $color = array("blue","black","red");
    // echo count($color);

    // array_push($color,"pink");
    // var_dump($color);


    // $car = array("brand"=>"Ford", "model"=>model(), "year"=>year());
    
    // echo $car["brand"]

    // $car["brand"] = "suzuki";
    // var_dump($car);

    // function myFunction() {
    //     echo "I come from a function!";
    //   }
    //   function myage() {
    //     echo "I come from a age function!";
    //   }
      
    //   $myArr = array("car" => "Volvo", "age" => "18", "message" => "xyx");
      
    //   $myArr["age"]();

    // array_push($color,"violet","green","parrot");
    // var_dump($color);
    //  array_splice($color,2,1);
    // var_dump($color)

    // $myArr+=["color"=>"red"];
    // var_dump($myArr);

    // array_splice($color,2,1);
    // var_dump($color)

    // $new = array_diff($myArr,[18,"xyx"]);
    // print_r($new);

    // unset($myArr["message"]);
    // var_dump($myArr)

    // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    // asort($age);
    // ksort($age);
    // arsort($age);  
   
    // krsort($age);  
    // foreach($age as $x => $x_value) {
    //     echo "Key=" . $x . ", Value=" . $x_value;
    //     echo "<br>";}

    // print_r(array_change_key_case($age,CASE_LOWER));

    // $a = array(
    //     array(
    //       'id' => 5698,
    //       'first_name' => 'Peter',
    //       'last_name' => 'Griffin',
    //     ),
    //     array(
    //       'id' => 4767,
    //       'first_name' => 'Ben',
    //       'last_name' => 'Smith',
    //     ),
    //     array(
    //       'id' => 3809,
    //       'first_name' => 'Joe',
    //       'last_name' => 'Doe',
    //     )
    //   );
    //   $firstname = array_column($a,'first_name');
    //   print_r($firstname);


    // $a1=array_fill(3,4,"blue");
    // $b1=array_fill(0,1,"red");
    // print_r($a1);
    // echo "<br>";
    // print_r($b1);

    // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // $result = array_flip($a1);
    // print_r($result);


    // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // $a2=array("g"=>"red","f"=>"green","e"=>"blue");
    // $result = array_intersect($a1,$a2);
    // print_r($result);


    // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // $a2=array("g"=>"red","f"=>"green","e"=>"blue");
    // $result = array_intersect_assoc($a1,$a2);
    // print_r($result);


    // $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    // if(array_key_exists("e", $a1)){
    //     echo "key exists";
    // }else{
    //     echo "key doesnt exists";
    // }

    // function mul($v){
    //     return ($v * $v);
    // }
    // $a = array(1,2,3,4,5);
    // print_r(array_map("mul",$a));

    // $a1=array("red","green");
    // $a2=array("blue","yellow");
    // print_r(array_merge($a1,$a2));

    // $a = array(1,2,3,4,5,6,7,);
    // // print_r(array_sum($a));
    // print_r(array_values($a));

    function myfunction1($value,$key,$p){
        echo "$key $p $value <br>";
    }
    
$a=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array($a1,"1"=>"blue","2"=>"yellow");
array_walk_recursive($a2,"myfunction1","has a value");

function myfunction($value,$key,$p){
    echo "$key $p $value <br>";
}
$a1=array("a"=>"red","b"=>"green");
$a2=array($a1,"1"=>"blue","2"=>"yellow");
array_walk_recursive($a2,"myfunction","has a value");
?>
</pre>
</body>
</html>