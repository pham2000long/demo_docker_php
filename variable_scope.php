<?php
/**
 * Created by PhpStorm.
 * User: ThoLH
 * Date: 24-Oct-17
 * Time: 2:54 AM
 */
$x = 5; // global scope

function myTest()
{
    $y = 10;// local scope

    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    // using y inside is ok
    echo "<p>Variable y inside function is: $y</p>";
}

myTest();

// using x outside is ok
echo "<p>Variable x outside function is: $x</p>";
// using y outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";


// using global keyword
echo "<br>";
echo "Test using global keyword<br>";

$a = 5;
$b = 10;

function testGlobalUsing()
{
    global $a, $b;
    $b = $a + $b;
}

/*function testGlobalUsing() {
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}*/


testGlobalUsing();
echo "b is $b <br>"; // outputs 15

// using static keyword
echo "<br>";
echo "Test static variable<br>";

function statticTest()
{
    static $x = 0;
    // $x = 0;
    echo "static x is $x <br>";
    $x++;
}

statticTest();
statticTest();
statticTest();