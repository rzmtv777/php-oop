<?php

// ===== Abstraction =====
abstract class Vehicle {

    protected $brand;
    protected $speed;

    // Constructor
    public function __construct($brand, $speed) {
        $this->brand = $brand;
        $this->speed = $speed;
    }

    // Encapsulation (getter)
    public function getBrand() {
        return $this->brand;
    }

    // Encapsulation (setter)
    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function getSpeed() {
        return $this->speed;
    }

    // Abstract method
    abstract public function start();

    public function info() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Speed: " . $this->speed . "<br>";
    }
}


// ===== Inheritance =====
class Car extends Vehicle {

    private $doors;

    public function __construct($brand, $speed, $doors) {
        parent::__construct($brand, $speed);
        $this->doors = $doors;
    }

    public function start() {
        echo "Car engine started 🚗<br>";
    }

    public function getDoors() {
        return $this->doors;
    }
}


// ===== Another Child Class =====
class Bike extends Vehicle {

    private $type;

    public function __construct($brand, $speed, $type) {
        parent::__construct($brand, $speed);
        $this->type = $type;
    }

    // Polymorphism
    public function start() {
        echo "Bike engine started 🏍️<br>";
    }

    public function getType() {
        return $this->type;
    }
}


// ===== Objects =====
$car = new Car("Toyota", 180, 4);
$bike = new Bike("Yamaha", 220, "Sport");


// ===== Using Methods =====
echo "<h3>Car Info</h3>";
$car->start();
$car->info();
echo "Doors: " . $car->getDoors() . "<br>";

echo "<hr>";

echo "<h3>Bike Info</h3>";
$bike->start();
$bike->info();
echo "Type: " . $bike->getType() . "<br>";


// ===== Polymorphism Example =====
echo "<hr>";
echo "<h3>Polymorphism Test</h3>";

$vehicles = [$car, $bike];

foreach ($vehicles as $v) {
    $v->start();
}

?>