<?php

use PHPUnit\Framework\TestCase;
use Yeraynp\CompanyPractica\Employee;
use Yeraynp\CompanyPractica\Person;

class EmployeeTest extends TestCase
{
  public function testEmployeeConstructor(){
    $employee = new Employee("Luis", 35, 2500);
    $this->assertInstanceOf(Person::class, $employee, "Employee hereda de Person");
    $this->assertSame('Luis', $employee->getName());
    $this->assertSame(35, $employee->getAge(), 'La edad no es correcta');
    $this->assertSame(2500, $employee->getSalary(), 'El salario no es correcto');
  }
}