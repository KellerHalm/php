<?php


    // $person = new Person();

    // class Person {

    // }

    // // $person = new Person();

    // print_r($person);

    // class Person {
    //     public $name, $age;

    //     function hello() {
    //         echo "Hello! <br>";
    //     }
    // }

    // $tom = new Person();
    // $tom->name = "Tom";
    // $tom->age = 20;

    // $newName = $tom->name;

    // echo "Username: " . $newName . "<br>";

    // $tom->hello();

    // print_r($tom);


    // class Person {
    //     public $name = "Undefined", $age = 18;

    //     function getName() {
    //         echo $this->name;
    //     }

    //     function setName() {
    //         $this->name = "Maga";
    //     }
    // }

    // $maks = new Person();

    // echo "Username: " . $maks->name ."<br>";
    // $maks->setName();
    // echo "Username: " . $maks->name ."<br>";


    // $a = new Person();
    // $b = new Person();

    // echo $a === $b; // 0
    // echo $a == $b; // 1


    // class Person {
    //     public $name, $age;

    //     function __construct($name, $age = 0) {
    //         $this->name = $name;
    //         $this->age = $age;
    //     }

    //     function displayInfo() {
    //         echo "Name: $this->name --- Age: $this->age <br>";
    //     }
    // }

    // $person = new Person("Uveis", 20);
    // $person->displayInfo();


    // class Person {
    //     function __construct(public $name, public $age = 0) {
    //         $this->name = $name;
    //         $this->age = $age;
    //     }

    //     function displayInfo() {
    //         echo "Name: $this->name --- Age: $this->age <br>";
    //     }
    // }

    // $person = new Person("Uveis", 20);
    // $person->displayInfo();


    // class Person
    // {
    //     public $name, $age;

    //     function __construct($name, $age)
    //     {
    //         $this->name = $name;
    //         $this->age = $age;
    //     }

    //     function getInfo() 
    //     {
    //         echo "Name: ".$this->name."<br> Age: ".$this->age."<br>";
    //     }

    //     function __destruct()
    //     {
    //         echo "Destruct";
    //     }
    // }

    // $person = new Person("Uveis", 20);

    // $person->getInfo();


    // $person = new class {
    //     public $name;

    //     function sayHello() {
    //         echo "Hello!<br>";
    //     }
    // };

    // $person->sayHello();
    // $person -> name = "Uveis";

    // echo "Name: " . $person -> name . "<br>";


    // class Person
    // {
    //     public $name;

    //     function __construct($name)
    //     {
    //         $this->name = $name;
    //     }

    //     function displayInfo()
    //     {
    //         echo "Name: $this->name <br>";
    //     }
    // }

    // class Employee extends Person
    // {}

    // $tom = new Employee("Tom");
    // $tom -> displayInfo();


    // class Person
    // {
    //     public $name;

    //     function __construct($name)
    //     {
    //         $this->name = $name;
    //     }

    //     function displayInfo()
    //     {
    //         echo "Name: $this->name <br>";
    //     }
    // }

    // class Employee extends Person
    // {
    //     function __construct($name)
    //     {
    //         parent::__construct($name);
    //         $this->name = $name;
    //     }

    //     function displayInfo()
    //     {
    //         Person::displayInfo();
    //         echo "Name: $this->name <br>";
    //     }
    // }

    // class Manager 
    // {}

    // $tom = new Employee("Tom");
    // // $tom -> displayInfo();


    // $tom instanceof Employee;
    // $tom instanceof Person;
    // $tom instanceof Manager;


    // class Person
    // {
    //     public $name;

    //     function __construct($name)
    //     {
    //         $this->name = $name;
    //     }

    //     final function displayInfo()
    //     {
    //         echo "Name: $this->name <br>";
    //     }
    // }

    // class Employee extends Person
    // {
    //     function __construct($name)
    //     {
    //         parent::__construct($name);
    //         $this->name = $name;
    //     }

    //     function displayEmployeeInfo() // displayInfo будет ошибка из-за final
    //     {
    //         Person::displayInfo();
    //         echo "Name: $this->name <br>";
    //     }
    // }

    // final class Manager // не наследуется из-за final
    // {} 


    // class Person 
    // {
    //     private $id = '123';
    //     public $name = 'Uveis';
    //     protected $email = 'uveis@mail.ru';

    //     private function getId() 
    //     {
    //         echo "This private method for get ID <br />";
    //     }

    //     public function getName() 
    //     {
    //         echo "This public method for get name <br />";
    //     }

    //     protected function getEmail() 
    //     {
    //         echo "This protected method for get email <br />";
    //     }

    //     function test()
    //     {
    //         $this -> getId();
    //         $this -> getName();
    //         $this -> getEmail();

    //         echo "$this->id <br />";
    //         echo "$this->name <br />";
    //         echo "$this->email <br />";
    //     }
    // }

    // $person = new Person();
    
    // echo $person -> test();
    // echo "$person->name";


    // class Employee extends Person
    // {
    //     function test()
    //     {
    //         $this -> getName();
    //         $this -> getEmail();
    //     }
    // }


    // class Person 
    // {
    //     public $name, $age;

    //     static $id = 0;

    //     function __construct($name, $age)
    //     {
    //         self::$id++;
    //         $this -> name = $name;
    //         $this -> age = $age;
    //     }

    //     function getID()
    //     {
    //         return self::$id;
    //     }
    // }

    // $person = new Person("Uveis", 20);
    // echo $person -> name . " " . $person -> age . " " . $person -> getID();

    // $person2 = new Person("Uveys", 21);
    // echo $person2 -> name . " " . $person2 -> age . " " . $person2 -> getID();


    // trait Printer
    // {
    //     public function printSimpleText1($newParams)
    //     {
    //         echo "Method 1 $newParams <br>";
    //     }

    //     public function printSimpleText2($newParams)
    //     {
    //         echo "Method 2 $newParams <br>";
    //     }
    // }

    // class Message
    // {
    //     use Printer;
    // }

    // $message = new Message();
    // $message -> printSimpleText1("1");
    // $message -> printSimpleText2("2");


    // class Person 
    // {
    //     public $id = 1;
    // }

    // $person = new Person();
    // $person->id = 123;

    // $per = clone $person;
    // $per->id = 0;

    // echo $per->id . "<br>" . $person->id;


?>
