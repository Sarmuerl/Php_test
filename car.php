<?php
class Car{
    public $brand=''; //Toyota, Ford, etc.
    public $model=''; //Toyota, Ford, etc.
    public $color=''; //red, blue, green, etc.
    public $year=''; //in YYYY format
    public $price=''; //in dollars
    public $mileage=''; //in miles
    public $fuelType=''; //gasoline, diesel, electric, hybrid
    public $transmission=''; //automatic or manual
    public function __construct($brand, $model, $color, $year, $price, $mileage, $fuelType, $transmission){
        echo 'This is a ' .$brand. ',' .$model. ' car'. 'It is ' .$color. 'and was made in ' .$year. 'It costs ' .$price. 'dollars and has ' .$mileage. 'miles on it '. 'It runs on ' .$fuelType. 'and has a ' .$transmission. 'transmission.';
    
    }
}

    

$car1 = new Car("Toyota", "Corolla", "Red", "2020", "15000", "50000", "petrol", "automatic");
$car2 = new Car("Honda", "Civic", "Blue", "2021", "20000", "30000", "petrol", "manual");
$car3 = new Car("Ford", "Mustang", "Black", "2019", "25000", "10000", "diesel", "automatic");
$car4 = new Car("Chevrolet", "Camaro", "Yellow", "2022", "30000", "20000", "gasoline", "manual");
$car5 = new Car("BMW", "M3", "White", "2023", "40000", "5000", "electric", "automatic");
$car6 = new Car("Tesla", "Truck", "Silver", "2024", "250000", "40000", "hybrid", "automatic");

?>