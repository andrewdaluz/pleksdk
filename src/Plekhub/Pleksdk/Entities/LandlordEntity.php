<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of LandlordEntity
 *
 * @author cleomar
 */
class LandlordEntity {

    private $name;
    private $phone;
    private $streetTypeId;
    private $neighborhood;
    private $address;
    private $cep;
    private $email;
    private $city;
    private $addressNumber;
    private $addressComplement;
    private $personTypeId;
    private $publicPerson;
    private $residentCountry;
    private $profession;
    private $cpf;
    private $birthday;

    function getName() {
        return $this->name;
    }

    function getPhone() {
        return $this->phone;
    }

    function getStreetTypeId() {
        return $this->streetTypeId;
    }

    function getNeighborhood() {
        return $this->neighborhood;
    }

    function getAddress() {
        return $this->address;
    }

    function getCep() {
        return $this->cep;
    }

    function getEmail() {
        return $this->email;
    }

    function getCity() {
        return $this->city;
    }

    function getAddressNumber() {
        return $this->addressNumber;
    }

    function getAddressComplement() {
        return $this->addressComplement;
    }

    function getPersonTypeId() {
        return $this->personTypeId;
    }

    function getPublicPerson() {
        return $this->publicPerson;
    }

    function getResidentCountry() {
        return $this->residentCountry;
    }

    function getProfession() {
        return $this->profession;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getBirthday() {
        return $this->birthday;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
    }

    function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    function setStreetTypeId($streetTypeId) {
        $this->streetTypeId = $streetTypeId;
        return $this;
    }

    function setNeighborhood($neighborhood) {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    function setCep($cep) {
        $this->cep = $cep;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    function setCity($city) {
        $this->city = $city;
        return $this;
    }

    function setAddressNumber($addressNumber) {
        $this->addressNumber = $addressNumber;
        return $this;
    }

    function setAddressComplement($addressComplement) {
        $this->addressComplement = $addressComplement;
        return $this;
    }

    function setPersonTypeId($personTypeId) {
        $this->personTypeId = $personTypeId;
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

    function setProfession($profession) {
        $this->profession = $profession;
        return $this;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
        return $this;
    }

    function setBirthday($birthday) {
        $this->birthday = $birthday;
        return $this;
    }

    public function toArray() {
        return ["name" => $this->name,
            "phone" => $this->phone,
            "street_type_id" => $this->streetTypeId,
            "neighborhood" => $this->neighborhood,
            "address" => $this->address,
            "cep" => $this->cep,
            "email" => $this->email,
            "city" => $this->city,
            "address_number" => $this->addressNumber,
            "address_complement" => $this->addressComplement,
            "person_type_id" => $this->personTypeId,
            "public_person" => $this->publicPerson,
            "resident_country" => $this->residentCountry,
            "profession" => $this->profession,
            "cpf" => $this->cpf,
            "birthday" => $this->birthday];
    }

}
