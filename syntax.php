<?php
// Demo full tag
# Default, safety to use
echo 'PHP full tags.<br>';
?>

<br>
<br>

<?
/*
 * Demo short tag
 * Need to enable short_open_tag in php.ini
 * Conflic whit XML tags
 */
echo 'PHP short-open tags.<br>';
?>

<br>
<br>

<?php
function helloWorld()
{
    // Case insensitive, false is default
    define('WELCOME', 'Hello World!', false);
    ECHO "Hello World!<br>";
    echo "Hello World!<br>";
    EcHo WELcOME;
    echo "<br>";
}

function helloName()
{
    $strName = 'Tuan';
    // $_strLastName = "Nguyen";
//     $1Name = "Le";
    echo "Hello, $strName!<br>";
    // echo "Hello, $strNaMe!<br>";
}

HelloWorld();
echo "<br>";
echo "<br>";
HelloName();
?>

