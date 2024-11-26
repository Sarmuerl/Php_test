<?php
class Human{
    public $firstname= 'Owolabi';
    private $lastname= 'Oyindamola';
    protected $age= 45;

    public function eat(){
        echo 'i can eat';
    }
    public function move(){
        echo 'i can move because i am a human being';
    }

    // public function __construct($name){
    //     echo 'This is a constructor for' .$name;
    // }


   

    public function walk(){
        echo 'i can walk';
    }

    public function run(){
        echo 'i can run';
    }
    public function sleep(){
        echo 'i can sleep';
    }

}

$beingone=new Human;
echo $beingone->firstname;
echo '<br>';
// echo $beingone->lastname;
echo $beingone->eat();

echo '<br>';
echo $beingone->move();

echo '<br>';
$beingtwo=new Human;
echo $beingtwo->walk();

echo '<br>';
$beingthree=new Human;
echo $beingthree->run();

echo '<br>';
$beingfour=new Human;
echo $beingfour->sleep();

class Newhuman extends Human{
    public function sing(){
        echo 'i can sing '.$this->firstname. ''.''.$this->age;
    }
}
$newhumanone=new Newhuman('newhumanone');
echo $newhumanone->firstname;





?>