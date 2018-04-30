<?php

      echo  "<h1>Basic OOP PHP</h1><br><br><br><br>";



       echo "<h2>Class Declaration with Properties and Methods </h2><br><br>";
    class Bicycle {

        var $brand;
        var $model;
        var $year;
        var $description;
        var $weight_kg;



        function name(){
             echo "Bike Model: ".$this->model .", Year Make: ". $this->year ."</br>";
        }

        function weight_lbs(){
            echo "Bike weight in lbs is: ".$this->weight_kg *2.2046226218. "</br>";
        }

        function set_weight_lbs($weight_lb){

            $this->weight_kg = $weight_lb / 2.2046226218;
            echo "Bike weight in kg is: ".$this->weight_kg  . "</br>";
        }
    }

function trace($obj){

    "<pre>".
        print_r($obj)
    . "</pre><br/>";
};

echo "Listing Class Properties: <br>";
trace(get_class_vars('Bicycle'));
echo "<br><br>";


echo "Listing Class Methods: <br>";
trace(get_class_methods('Bicycle'));
echo "<br><br>";



    echo "<h2>Class Instantiation</h2><br><br>";


    $bike = new Bicycle();


    $bike->brand = 'Pinnacle';
    $bike->model = 'Dolomite 2015';
    $bike->year = '2015';
    $bike->description = 'Road Bike';
    $bike->weight_kg = '8.5';


    $bike->name();
    $bike->weight_lbs();
    $bike->set_weight_lbs(16);

echo "<br><br><br>";


echo "Listing Object Properties: <br>";
trace(get_object_vars($bike));
echo "<br><br>";


echo "Listing Object Methods: <br>";
trace(get_class_methods($bike));
echo "<br><br>";


echo "<h2>Class Inheritance</h2><br><br>";

class Animal{

    var $blood = 'blood';
    var $offsprings = 'offsprings';

    function needsTheSun(){
        echo "Depends if it is a reptile or a mammal";
    }
}

class Reptile extends Animal{
    var $blood = 'cold';
    var $offsprings = 'hatch eggs';

    function needsTheSun(){

        echo "True";
    }
}

class Mammal extends Animal{
    var $blood = 'warm';
    var $offsprings = 'give birth';

    function needsTheSun(){
        echo "False";
    }
}

echo "Listing Animal Class Properties: <br>";
trace(get_class_vars('Animal'));
echo "<br><br>";


echo "Listing Animal Class Methods: <br>";
trace(get_class_methods('Animal'));
echo "<br><br>";

echo "Listing Reptile sub-Class Properties: <br>";
trace(get_class_vars('Reptile'));
echo "<br><br>";


echo "Listing Reptile sub-Class Methods: <br>";
trace(get_class_methods('Reptile'));
echo "<br><br>";

echo "Listing Mammal sub-Class Properties: <br>";
trace(get_class_vars('Mammal'));
echo "<br><br>";


echo "Listing Mammal sub-Class Methods: <br>";
trace(get_class_methods('Mammal'));
echo "<br><br>";


echo "<h2>Instances using sub-Classes</h2><br><br>";

echo "<h3>Creating an instance of parent class Animal which extends parent class Animal </h3>";

$animal = new Animal();


echo "Animals have: ". $animal->blood . " blood<br>";
echo "Animals: ". $animal->offsprings . "<br>";
echo "Animals need the sun to stay warm: ";
$animal->needsTheSun() . "<br>";

echo "<br><br><br>";


$snake = new Reptile();

echo "<h3>Creating an instance of sub-class Reptile which extends parent class Animal </h3>";

echo "Snakes have: ". $snake->blood . " blood<br>";
echo "Snakes: ". $snake->offsprings . "<br>";
echo "Snakes need the sun to stay warm: ";
$snake->needsTheSun() . "<br>";

echo "<br><br><br>";

$tiger = new Mammal();

echo "<h3>Creating an instance of sub-class Mammal which extends parent class Animal </h3>";

echo "Tigers have: ". $tiger->blood . " blood<br>";
echo "Tigers: ". $tiger->offsprings . "<br>";
echo "Tigers need the sun to stay warm: ";
$tiger->needsTheSun() . "<br>";







?>