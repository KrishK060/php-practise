<?php
// class fruits{
//   public $name;
//   public $color;

//   function __construct($name,$color){
//     $this->name=$name;
//     $this->color=$color;
//   }
//   function get_name(){
//     return $this->name;
//   }
//   function get_color(){
//     return $this->color;
//   }
// }
// $fruit = new fruits("apple","red");
// echo $fruit->get_name();
// echo $fruit->get_color();

// class fruits{
//     public $name;
//     public $color;
  
//     function __construct($name,$color){
//       $this->name=$name;
//       $this->color=$color;
//     }
//     function __destruct(){
//         echo "".$this->name."";
//     }
//     function get_name(){
//       return $this->name;
//     }
//     function get_color(){
//       return $this->color;
//     }
//   }
//   $fruit = new fruits("apple","red");
//   echo $fruit->get_name();
//   echo $fruit->get_color();

// class fruits{
//     public $name;
//     public $color;
  
//     function __construct($name,$color){
//       $this->name=$name;
//       $this->color=$color;
//     }
//     function get_name(){
//       return $this->name;
//     }
//     function get_color(){
//       return $this->color;
//     }
//   }
//   class strawberry extends fruits{
//     public function msg(){
//         echo "this is child class";
//     }
//   }
// $strawberry = new strawberry("strawberry","red");
// echo $strawberry->get_name();
// echo $strawberry->get_color();
// echo $strawberry->msg();

// class fruits{
//     public $name;
//     public $color;
  
//     function __construct($name,$color){
//       $this->name=$name;
//       $this->color=$color;
//     }
//     function get_name(){
//       return $this->name;
//     }
//     protected function msg1(){
//      echo "this is msg1";
//     }
//   }
//   class strawberry extends fruits{
//     public function msg2(){
//         echo "this is child class";
//         $this->msg1();
//     }
//   }
// $strawberry = new strawberry("strawberry","red");
// echo $strawberry->get_name();
// // echo $strawberry->msg1();//this gives error because protected member cant be accesed this way
// echo $strawberry->msg2();

// class Goodbye {
//   const LEAVING_MESSAGE = "Thank you ";
//   public function byebye() {
//     echo self::LEAVING_MESSAGE;
//   }
// }

// $goodbye = new Goodbye();
// $goodbye->byebye();

// abstract class ParentClass {
//   abstract protected function prefixName($name);
// }

// class ChildClass extends ParentClass {
//   public function prefixName($name) {
//     if ($name == "mark") {
//       $prefix = "Mr.";
//     } elseif ($name == "marki") {
//       $prefix = "Mrs.";
//     } else {
//       $prefix = "";
//     }
//     return "{$prefix} {$name}";
//   }
// }

// $class = new ChildClass;
// echo $class->prefixName("mark");
// echo "<br>";
// echo $class->prefixName("marki");

// interface Animal {
//   public function makeSound();
// }class Cat implements Animal {
//   public function makeSound() {
//     echo " Meow ";
//   }
// }

// class Dog implements Animal {
//   public function makeSound() {
//     echo " Bark ";
//   }
// }

// class Mouse implements Animal {
//   public function makeSound() {
//     echo " Squeak ";
//   }
// }


// $cat = new Cat();
// $dog = new Dog();
// $mouse = new Mouse();
// $animals = array($cat, $dog, $mouse);


// foreach($animals as $animal) {
//   $animal->makeSound();
// }

class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;