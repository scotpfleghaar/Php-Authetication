<?php 
// // Start mamp and the file is on localhost:8888 
//  echo "It works, ";

//  class User {
//     //Properties (attributes)
//     public $name;


//     //Methods (functions)
//     public function sayHello(){
//         return $this->name." says Hello!";
//     }
//  };

//  //Instantiate  a user object
//  $user1 = new User();

//  echo $user1->name = "Dude";
//  echo "<br>";
//  echo $user1->sayHello();

//  echo "<br>";
// // Create new User
// $user2 = new User();

// $user2->name = "Jimmy";
// echo "<br>";
// echo $user2->sayHello();



////////Constructors//////////

// class User {
//     public $name;
//     public $age;

//     public function __construct($name, $age){
//         $this->name = $name;
//         $this->age = $age;
//         echo "<br>Constructor Called<br>";
//         echo "Class ".__CLASS__." Instantiated<br>";
//     }

//     public function sayHello(){
//         return $this->name." Says Hello";
//     }

//     // Called when no other references to a cerian object exists. Used for cleaup, closing connection and the like.
//     public function __destruct(){
//         echo '<br>Destructor Called<br>';
     
//     }
// }

// $user1 = new User("Scot","23");
// echo "<br>";
// echo $user1->name." is ".$user1->age." Years old!";
// echo "<br>";
// echo $user1->sayHello();


// $user2 = new User("Chris","30");
// echo "<br>";
// echo $user2->name." is ".$user2->age." Years old!";
// echo "<br>";
// echo $user2->sayHello();

// // $user2 = new User();



////////Access Modifiers, Getters and Setters

// class User {
//     //protected $item
//     private $name;
//     private $age;

//     public function __construct($name,$age){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getName(){
//         return $this->name;
//     }

//     public function setName($name){
//         return $this->name = $name;
//     }

//     // __get MAGIC METHOD
//     public function __get($property){
//         if(property_exists($this,$property)){
//             return $this->$property;
//         }
//     }

//     // __set MAGIC METHOD
//     public function __set($property, $value){
//         if(property_exists($this,$property)){
//             $this->$property = $value;
//         }
//         return $this;
//     }

// }

// // class Customer extends User {

// // }

// $user1 = new User("John", 40);

// // echo $user1->name; // Doesnt work due to private modifier must use a getter

// // $user1->name = "jeff"; // Doesnt work due to private modifier must use a Setter

// echo $user1->getName();
// echo $user1->setName("Sam");
// echo $user1->getName();

// echo $user1->__get('age');
// $user1->__set('age','41');
// echo $user1->__get('age');



// /////////// Inheritance ///////////////
// class User {
//     protected $name;
//     protected $age;

//     public function __construct($name, $age){
//         $this->name = $name;
//         $this->age = $age;
//     }
// }

// class Customer extends User {
//     private $balance;

//     public function __construct($name, $age,$balance){
//         parent::__construct($name, $age);
//         $this->balance = $balance;
//     }

//     public function pay($amount){
//         return $this->name.' paid $'.$amount;
//     }

//     public function getBalance(){
//         return $this->balance;
//     }
// }

// $customer1 = new Customer("John", 33, 50);

// echo $customer1->pay(100);
// echo $customer1->getBalance();



//////// Static Methods & Properties //////////

// class User {
//     public $name;
//     public $age;
//     public static $minPassLength = 6;

//     public static function validatePass($pass){
//         if(strlen($pass) >= self::$minPassLength){
//             return true;
//         } else {
//             return false;
//         }
//     }
// }
// $password = "hello";
// if(User::validatePass($password)){
//     echo "Password valid";
// } else {
//     echo "Password not valid";
// }