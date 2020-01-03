<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of RenterWithIdentifierEntity
 *
 * @author cleomar
 */
class RenterWithIdentifierEntity extends RenterWithoutIdentifierEntity {

    private $birthday;
    private $emanciped;
    private $phoneDdd;
    private $phoneNumber;
    private $cellphoneDdd;
    private $cellphoneNumber;
    private $spouseCpf;
    private $email;
    private $companyName;
    private $companyPhoneDdd;
    private $companyPhoneNumber;
    private $otherIncomes;
    private $residenceCep;
    private $publicPerson;
    private $residentCountry;
    function getBirthday() {
        return $this->birthday;
    }

    function getEmanciped() {
        return $this->emanciped;
    }

    function getPhoneDdd() {
        return $this->phoneDdd;
    }

    function getPhoneNumber() {
        return $this->phoneNumber;
    }

    function getCellphoneDdd() {
        return $this->cellphoneDdd;
    }

    function getCellphoneNumber() {
        return $this->cellphoneNumber;
    }

    function getSpouseCpf() {
        return $this->spouseCpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getCompanyName() {
        return $this->companyName;
    }

    function getCompanyPhoneDdd() {
        return $this->companyPhoneDdd;
    }

    function getCompanyPhoneNumber() {
        return $this->companyPhoneNumber;
    }

    function getOtherIncomes() {
        return $this->otherIncomes;
    }

    function getResidenceCep() {
        return $this->residenceCep;
    }

    function getPublicPerson() {
        return $this->publicPerson;
    }

    function getResidentCountry() {
        return $this->residentCountry;
    }

    function setBirthday($birthday) {
        $this->birthday = $birthday;
        return $this;
    }

    function setEmanciped($emanciped) {
        $this->emanciped = $emanciped;
        return $this;
    }

    function setPhoneDdd($phoneDdd) {
        $this->phoneDdd = $phoneDdd;
        return $this;
    }

    function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    function setCellphoneDdd($cellphoneDdd) {
        $this->cellphoneDdd = $cellphoneDdd;
        return $this;
    }

    function setCellphoneNumber($cellphoneNumber) {
        $this->cellphoneNumber = $cellphoneNumber;
        return $this;
    }

    function setSpouseCpf($spouseCpf) {
        $this->spouseCpf = $spouseCpf;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    function setCompanyName($companyName) {
        $this->companyName = $companyName;
        return $this;
    }

    function setCompanyPhoneDdd($companyPhoneDdd) {
        $this->companyPhoneDdd = $companyPhoneDdd;
        return $this;
    }

    function setCompanyPhoneNumber($companyPhoneNumber) {
        $this->companyPhoneNumber = $companyPhoneNumber;
        return $this;
    }

    function setOtherIncomes($otherIncomes) {
        $this->otherIncomes = $otherIncomes;
        return $this;
    }

    function setResidenceCep($residenceCep) {
        $this->residenceCep = $residenceCep;
        return $this;
    }

    function setPublicPerson($publicPerson) {
        $this->publicPerson = $publicPerson;
        return $this;
    }

    function setResidentCountry($residentCountry) {
        $this->residentCountry = $residentCountry;
        return $this;
    }

    
    public function toArray() {
        return [
            "cpf" => $this->cpf,
            "name" => $this->name,
            "marital_status_id" => $this->maritalStatusId,
            "employment_bond_id" => $this->employmentBondId,
            "income_value" => $this->incomeValue,
            "birthday" => $this->birthday,
            "emanciped" => $this->emanciped,
            "phone_ddd" => $this->phoneDdd,
            "phone_number" => $this->phoneNumber,
            "cellphone_ddd" => $this->cellphoneDdd,
            "cellphone_number" => $this->cellphoneNumber,
            "spouse_cpf" => $this->spouseCpf,
            "email" => $this->email,
            "company_name" => $this->companyName,
            "company_phone_ddd" => $this->companyPhoneDdd,
            "company_phone_number" => $this->companyPhoneNumber,
            "other_incomes" => $this->otherIncomes,
            "public_person" => $this->publicPerson,
            "resident_country" => $this->residentCountry,
            "residence_cep"=>$this->residenceCep
        ];
    }

}
