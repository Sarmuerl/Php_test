<?php

class Fruit{
   public $name='';
   public $color='';
   public $price='';
   public $weight='';
   public $taste='';
   public $origin='';
   public function __construct($name, $color, $price, $weight, $taste, $origin){
    echo 'This is a ' $fruit;

    }
}

$fruit1 = new Fruit("Apple", "Red", "1.00", "100g", "Sweet", "USA");
echo '<br><br>';
$fruit2 = new Fruit("Banana", "Yellow", "0.50", "120g", "Sweet", "Ecuador");
echo '<br><br>';
$fruit3 = new Fruit("Orange", "Orange", "0.75", "150g", "Citrus", "Spain");
echo '<br><br>';
$fruit4 = new Fruit("Grapes", "Purple", "2.00", "200g", "Sweet", "California");
echo '<br><br>';
$fruit5 = new Fruit("Pineapple", "Yellow", "3.00", "300g", "Sweet", "Florida");
echo '<br><br>';
$fruit6 = new Fruit("Mango", "Yellow", "2.50", "250g", "Sweet", "India");
echo '<br><br>';


?>