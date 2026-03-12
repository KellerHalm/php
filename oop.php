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


    class Person
    {
        public $name, $age;

        function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        function getInfo() 
        {
            echo "Name: ".$this->name."<br> Age: ".$this->age."<br>";
        }

        function __destruct()
        {
            echo "Destruct";
        }
    }

    $person = new Person("Uveis", 20);

    $person->getInfo();


?>
