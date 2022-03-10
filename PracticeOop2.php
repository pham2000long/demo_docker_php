<?php

/**
 * abstract class Country
 * 
 * ==== Properties 
 * @property $slogan
 * 
 * ==== Methods
 * @method sayHello
 */
abstract class Country
{
    protected $slogan;

    abstract function sayHello();
}

/**
 * interface Boss
 * @method checkValidSlogan
 */
interface Boss
{
    function checkValidSlogan($str);
}

/**
 * Class EnglandCountry
 * ==== Methods
 * @method sayHello
 * @method checkValidSlogan
 */
class EnglandCountry extends Country implements Boss
{
    use Active;

    public function sayHello()
    {
        echo 'Hello';
    }

    /**
     * Check validate string
     * @param string $str
     * @return bool
     */
    public function checkValidSlogan($str)
    {
        if (strripos($str, 'england') !== false || strripos($str, 'english') !== false) {
            return true;
        }
        return false;
    }

    /**
     * Setter Slogan Method
     * @param $slogan
     */
    public function setSlogan($slogan){
        $this->slogan = $slogan;
    }

    /**
     * Getter Slogan Method
     *
     */
    public function getSlogan(){
        return $this->slogan;
    }

}

/**
 * Class VietnamCountry
 * ==== Methods
 * @method sayHello
 * @method checkValidSlogan
 */
class VietnamCountry extends Country implements Boss
{
    use Active;

    public function sayHello()
    {
        echo 'Xin chào';
    }

    /**
     * Check validate string
     * @param string $str
     * @return bool
     */
    public function checkValidSlogan($str)
    {
        if (strripos($str, 'vietnam') !== false && strpos($str, 'hust') !== false) {
            return true;
        }
        return false;
    }

    /**
     * Setter Slogan Method
     * @param $slogan
     */
    public function setSlogan($slogan){
        $this->slogan = $slogan;
    } 

    /**
     * Getter Slogan Method
     *
     */
    public function getSlogan(){
        return $this->slogan;
    }
}

/**
 * trait Active
 * 
 * @method defindYourSelft
 */
trait Active
{
    public static function defindYourSelft($nameClass)
    {
        return get_class($nameClass);
    }
}

$englandCountry = new EnglandCountry();
$vietnamCountry = new VietnamCountry();

$englandCountry->setSlogan('England is a country that is part of the United Kingdom. It shares land borders with Wales to the west and Scotland to the north. The Irish Sea lies west of England and the Celtic Sea to the southwest.');

$vietnamCountry->setSlogan('Vietnam is the easternmost country on the Indochina Peninsula. With an estimated 94.6 million inhabitants as of 2016, it is the 15th most populous country in the world.');

$englandCountry->sayHello(); // Hello
echo "<br>";
$vietnamCountry->sayHello(); // Xin chao

echo "<br>";

var_dump($englandCountry->checkValidSlogan($englandCountry->getSlogan())); // true
echo "<br>";
var_dump($vietnamCountry->checkValidSlogan($vietnamCountry->getSlogan())); // false
echo "<br>";

echo 'I am ' . $englandCountry::defindYourSelft($englandCountry); 
echo "<br>";
echo 'I am ' . $vietnamCountry::defindYourSelft($vietnamCountry); 
