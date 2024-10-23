<?php

namespace Yeraynp\CompanyPractica;

class Company {
    private $employees = [];

    public function getEmployees () {
        return $this->employees;
    }

    public function addEmployees ($employee) : void {
        $this->employees [] = $employee;
    }

    public function removeEmployee ($employee) {
        $pos = array_search($employee, $this->employees);
        if ($pos !== false) {
            array_splice($this->employees, $pos, 1);
        }
    }

    public function CalculateTotalSalary () {
        $total = 0;
        foreach($this->employees as $employee){
            $total += $employee->getSalary();
        }
        return $total;
    }
}