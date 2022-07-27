<?php


#region 1

$x = 3 + '15%' . '$25'; // 18

#endregion /1


#region 2

$name = "Max";
function getName($name)
{
    $name = "My name is " . $name;
}

echo $name;
getName($name);
echo $name;

#endregion /2


#region 3

Class Clazz
{
    public string $value;
}

$b = new Clazz;
$b->value = 1;
$a = clone $b;
$a->newValue = 2;
echo $b->newValue;


#endregion /3


#region 4

Class Test
{
    public $is;
    public function __construct($parta)
    {
        $this->is = $parta;
    }

}

function what()
{
    try {
        return $answer = new Test(123);
    } finally {
    $answer->is = 321;
    }
}
echo what()->is;


#endregion /4


#region 5

class Electricity {}

class Lightning extends Electricity
{
    public function getStatic(): static
    {
        return new Electricity();
    }
}
$thunderbolt = new Lightning();
var_dump($thunderbolt->getStatic());


#endregion /5