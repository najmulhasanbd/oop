<?php

// class Person
// {
//     public $name;
//     public $age;
//     public function __construct($name, $age)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }
//     public function display()
//     {
//         return $this->name . $this->age;
//     }
// }
// $info = new Person('najmul', '28');
// echo $info->display();
// echo "<br>";
// $a = new Person('hasan', '30');

// echo $a->display();

// class Access
// {
//     public $name;
//     protected $age;
//     private $address;

//     public function hhhhh()
//     {
//         return 'this is private access';
//     }
// }

// $info = new Access();
// echo $info->hhhhh();


class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function display()
    {
        return $this->name . ' ' . $this->age;
    }
}

class Son extends Person
{
    public $address;
    public function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function message()
    {
        return $this->name . ' ' . $this->age . ' ' . $this->address;
    }
}

$info = new Person('Najmul', '20');
echo $info->display();
echo '<br>';
$check = new Son('Najmul', '20', 'dhaka');
echo $check->message();
