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

class User {
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        echo "<br>Constructor Called<br>";
        echo "Class ".__CLASS__." Instantiated<br>";
    }

    public function sayHello(){
        return $this->name." Says Hello";
    }

    // Called when no other references to a cerian object exists. Used for cleaup, closing connection and the like.
    public function __destruct(){
        echo '<br>Destructor Called<br>';
     
    }
}

$user1 = new User("Scot","23");
echo "<br>";
echo $user1->name." is ".$user1->age." Years old!";
echo "<br>";
echo $user1->sayHello();


$user2 = new User("Chris","30");
echo "<br>";
echo $user2->name." is ".$user2->age." Years old!";
echo "<br>";
echo $user2->sayHello();

// $user2 = new User();
