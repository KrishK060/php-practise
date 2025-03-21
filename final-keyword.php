<?php
// class Final_keyword{
//     final public function abc(){
//         echo "final keyword used";
//     }
// }

// class Final_keyword1 extends Final_keyword{

// }
// $obj = new Final_keyword1;
// echo $obj->abc();

class Final_keyword1{
    public function abc(){
        echo "final keyword used";
    }

}
final class Final_keyword extends Final_keyword1{
    public function abcd(){
        echo "final keyword used2";
    }
}

$obj = new Final_keyword;
echo $obj->abcd();