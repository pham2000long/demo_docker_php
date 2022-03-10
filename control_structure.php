<?php
/**
 * Created by PhpStorm.
 * User: ThoLH
 * Date: 24-Oct-17
 * Time: 2:55 AM
 */

// If else elseif
$t = date('H');

if ($t < '8') {
    echo 'Before working time! <br>';
} elseif ($t > '8' && $t < '17'){
    echo 'On working time! <br>';
} else {
    echo 'After working time! <br>';
}

echo '<br>';
echo '<br>';

// Switch
$favcolor = 'red';
// $favcolor = 'green';

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red! <br>';
        break;
    case 'green':
        echo 'Your favorite color is green 1! <br>';
        // break;
    case 'green':
        echo 'Your favorite color is green 2! <br>';
        break;
    default:
        echo 'Your favorite color is neither red, blue, nor green!';
}

echo '<br>';
echo '<br>';

// While
$x = 0;
while ($x < 4) {
    echo "The number is: $x <br>";
    $x++;
}

echo '<br>';
echo '<br>';

// Do-While
$x = 0;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x < 4);

echo '<br>';
echo '<br>';

// For
for ($x = 0; $x <= 6; $x++) {
    echo "The number is: $x <br>";
}

echo '<br>';
echo '<br>';

// Foreach
$colors = array('red', 'green', 'blue', 'yellow');
foreach ($colors as $value) {
    echo "$value <br>";
}
