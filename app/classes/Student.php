<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;


class Student extends Teacher implements ExampleOne, ExampleTwo
{
    use category; //trait

    protected $country = "Bangladesh";
    public static $area = "farmgate";

    public function __construct()
    {
        $this->name = "Riaj";  // User class er name property overwrite korlam
        $this->city = "Savar"; // User class er city property overwrite korlam
    }


    public function manage()
    {
//        echo $this->country.'<br />';
//
//        echo $this->name.'<br />';
//        echo $this->city.'<br />';
//        echo $this->index();

        //name ar city property ta user class er ...and amra egula use + overwrite korechi so aita polymorphism hoyeche
        echo "Institute name is $this->name and city is $this->city and country is $this->country"."<br/>" ;
//        echo $this->add();      //aita abstract teacher class er method ja use kora jay

        echo self::$area.'<br>';

    }

    public function one()
    {
        // TODO: Implement one() method.
        echo "hello one"."<br/ >";
    }

    public function two()
    {
        // TODO: Implement two() method.
        echo "hello two";
    }

    public function three()
    {
        // TODO: Implement three() method.
        echo "hello three";
    }

    public function ten1()
    {
        // TODO: Implement ten1() method.
        echo "TEN 1";
    }

    public function ten2()
    {
        // TODO: Implement ten2() method.
        echo "TEN 2";
    }

    public function test()
    {
        // TODO: Implement test() method.
        echo "Hello Test";
    }

    public static function demo(){
        echo "hello demo"."<br />";
    }





}