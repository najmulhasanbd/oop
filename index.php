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


class Access
{
    public $name;
    protected $age;
    private $address;

    public function hhhhh()
    {
        return 'this is private access';
    }
}

$info = new Access();
echo $info->hhhhh();
