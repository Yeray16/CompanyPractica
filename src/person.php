<?php
namespace Yeraynp\CompanyPractica;
class Person {
    private string $name;
    private int $age;
    
    function __construct ($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function greet () {
        return "Hola, soy " . $this->name;
    }
    
}