<?php
// class Connection
// {
//     protected $link;
//     private $dsn, $username, $password;

//     public function __construct($dsn, $username, $password)
//     {
//         $this->dsn = $dsn;
//         $this->username = $username;
//         $this->password = $password;
//         $this->connect();
//     }

//     private function connect()
//     {
//         $this->link = new PDO($this->dsn, $this->username, $this->password);
//     }

//     public function __serialize(): array
//     {
//         return [
//           'dsn' => $this->dsn,
//           'user' => $this->username,
//           'pass' => $this->password,
//         ];
//     }

//     public function __unserialize(array $data): void
//     {
//         $this->dsn = $data['dsn'];
//         $this->username = $data['user'];
//         $this->password = $data['pass'];

//         $this->connect();
//     }
// }

//__toString()
// class test{
//     public $foo;
//     public function __construct($foo){
//         $this->foo = $foo;
//     }
//     public function __tostring() {
//         return $this->foo;
//     }
// }
// $class  = new test('hello');
// var_dump($class);

//__INVOKE()

// class xyz{
//     public function __invoke($x){
//         var_dump($x);
//     }
// }
// $obj = new xyz;
// echo $obj(5)

?>