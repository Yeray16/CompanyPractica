<?php

use PHPUnit\Framework\TestCase;
use Yeraynp\CompanyPractica\Person;

class PersonTest extends TestCase
{
    // Verificar que funciona el constructor
    public function testPersonConstructor(){
        $person1 = new Person("Pepe", 34);
        $this->assertSame("Pepe", $person1 ->getName());
        $this->assertSame(34,  $person1 ->getAge(), 'La edad no es correcta');
    }

    public function testGreet(){
        $person1 = new Person("Pepe", 34);
        $this->assertSame('Hola, soy Pepe', $person1->greet(), 'Falla al saludar');

    }
}