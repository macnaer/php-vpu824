<?php

// Example 1
// $a = 110;
// $b = 110;

// if ($a > $b) {
//     echo "<h1> " . $a  . " > " . $b . "</h1>";
// } else if ($a < $b) {
//     echo "<h1> " . $a  . " < " . $b . "</h1>";
// } else {
//     echo "<h1> " . $a  . " = " . $b . "</h1>";
// }


// Example2

// $email = "";
// $password = "";

// if (!empty($_POST)) {
//     // print_r($_GET);
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     if (isset($_POST['check'])) {
//         $check = $_POST['check'];
//     }

// echo '<h2>' . $email . "</h2>";
// echo '<h2>' . $password . "</h2>";
// if (isset($check)) {
//     echo '<h2>' . $check . "</h2>";
// }
//}



// require_once "views/header.html";
// require_once "views/main.html";
// require_once "views/footer.html";

// $arr = [2, 435, "Bill", true, [8, 45, "Test"], 44];

// // print_r($arr);
// $arr[4][2] = "Start";
// // var_dump($arr);

// $array = [
//     "Ukraine" => "UA",
//     "USA" => "US",
//     "Italy" => "IT",
// ];

// foreach ($array as $value) {
//     echo "<h3>" . $value . "</h3>";
// }

// print_r($array);

// $arr = array(1, 2, 3, 4, 4, 56, 234, 56, 78, 456, 44);
// // foreach ($arr as $value) {
// //     echo "<p>" . $value . "</p>";
// // }
// // print_r(array_reverse($arr));
// // print_r(array_pop($arr));
// print_r(count($arr));


// OOP Example

interface IEmploee
{
    public function ShowInfo();
}

abstract class Person
{
    protected $name;
    protected $surname;
    protected $age;

    function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    // public function ShowInfo()
    // {
    //     echo "<h3>" . $this->name  . "</h3>";
    //     echo "<h3>" . $this->surname  . "</h3>";
    //     echo "<h3>" . $this->age  . "</h3>";
    // }

    function __destruct()
    {
        echo "<h3>" . " Person Desctructor works " . "</h3>";
    }
}

class Worker extends Person implements IEmploee
{
    private $skills = [];
    private $position;
    function __construct($name, $surname, $age, $position)
    {
        parent::__construct($name, $surname, $age);
        $this->position = $position;
    }
    public function ShowInfo()
    {
        echo "<h3>" . $this->name  . "</h3>";
        echo "<h3>" . $this->surname  . "</h3>";
        echo "<h3>" . $this->age  . "</h3>";
        echo "<h3>" . $this->position  . "</h3>";
        foreach ($this->skills as $skill) {
            echo "<h3>" .  $skill  . "</h3>";
        }
    }

    function SetSkills($newSkill)
    {
        array_push($this->skills, $newSkill);
    }

    function __destruct()
    {
        echo "<h3>" . " Worker Desctructor works " . "</h3>";
    }
}

$worker1 = new Worker("Stive", "Jonson", 43, "Programmer");
// $worker1->ShowInfo();
$worker1->SetSkills("PHP");
$worker1->SetSkills("JS");
$worker1->SetSkills("Java");
$worker1->SetSkills("C++");
$worker1->ShowInfo();
