<?php
/**
 * Created by PhpStorm.
 * User: ThoLH
 * Date: 24-Oct-17
 * Time: 2:45 AM
 */

// String
$variable = 'name';

$literally = 'My $variable will not print!';
$literally2 = <<<'EOT'
My $variable will not print!
EOT;

print($literally);
print '<br>';
print($literally2);
print '<br>';

print '<br>';

$literally = 'My $variable will print!';
$literally2 = <<<EOT
My $variable will print!
EOT;

print($literally);
print '<br>';
print($literally2);
print '<br>';

print '<br>';
print '<br>';

// Integer
$intVar = 12345;
$anotherInt = -12345 + 12345;
print("$intVar and $anotherInt are integer! <br>");

print '<br>';
print '<br>';

// Doubles
$many = 2.2888800;
$many2 = 2.2111200;
$few = $many + $many2;

print("$many and $many2 are doubles! <br>");

print '<br>';
print '<br>';

// Boolean
$show = true;
if ($show)
    print('The show is true! <br>');
else
    print('The show is false! <br>');

print '<br>';
print '<br>';

// Array
$cars = array('Volvo', 'BMW', 'Toyota');
foreach ($cars as $car) {
    print("Car is $car! <br>");
}

print '<br>';
print '<br>';

// Object
class Car
{
    function Car()
    {
        $this->model = 'VW';
    }
}

// create an object
$herbie = new Car();

// show object properties
print "The car model is $herbie->model! <br>";
