<?php
namespace Yeraynp\CompanyPractica;
use Yeraynp\CompanyPractica\Company;

class Employee extends Person{
    private int $salary;

    public function __construct($name, $age, $salary)
    {
        parent::__construct($name, $age);
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }
}