<?php

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of RenterEntity
 *
 * @author cleomar
 */
class RenterWithoutIdentifierEntity {

    protected $cpf;
    protected $name;
    protected $maritalStatusId;
    protected $employmentBondId;
    protected $incomeValue;

    function getCpf() {
        return $this->cpf;
    }

    function getName() {
        return $this->name;
    }

    function getMaritalStatusId() {
        return $this->maritalStatusId;
    }

    function getEmploymentBondId() {
        return $this->employmentBondId;
    }

    function getIncomeValue() {
        return $this->incomeValue;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
    }

    function setMaritalStatusId($maritalStatusId) {
        $this->maritalStatusId = $maritalStatusId;
        return $this;
    }

    function setEmploymentBondId($employmentBondId) {
        $this->employmentBondId = $employmentBondId;
        return $this;
    }

    function setIncomeValue($incomeValue) {
        $this->incomeValue = $incomeValue;
        return $this;
    }

    public function toArray() {
        return ["cpf" => $this->cpf,
            "name" => $this->name,
            "marital_status_id" => $this->maritalStatusId,
            "employment_bond_id" => $this->employmentBondId,
            "income_value" => $this->incomeValue];
    }

}
