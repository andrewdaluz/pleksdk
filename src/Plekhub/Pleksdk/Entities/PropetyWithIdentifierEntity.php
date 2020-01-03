<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of PropetyWithIdentifierEntity
 *
 * @author cleomar
 */
class PropetyWithIdentifierEntity extends PropetyWithoutIdentifierEntity {

    private $validityDuration;
    private $streetTypeId;
    private $address;
    private $addressNumber;
    private $addressComplement;
    private $neighborhood;
    private $readjustmentIndexId;
    private $reasonRentId;
    private $electricalValue;
    private $waterValue;
    private $gasValue;
    function getValidityDuration() {
        return $this->validityDuration;
    }

    function getStreetTypeId() {
        return $this->streetTypeId;
    }

    function getAddress() {
        return $this->address;
    }

    function getAddressNumber() {
        return $this->addressNumber;
    }

    function getAddressComplement() {
        return $this->addressComplement;
    }

    function getNeighborhood() {
        return $this->neighborhood;
    }

    function getReadjustmentIndexId() {
        return $this->readjustmentIndexId;
    }


    function getReasonRentId() {
        return $this->reasonRentId;
    }

    function getElectricalValue() {
        return $this->electricalValue;
    }

    function getWaterValue() {
        return $this->waterValue;
    }

    function getGasValue() {
        return $this->gasValue;
    }

    function setValidityDuration($validityDuration) {
        $this->validityDuration = $validityDuration;
        return $this;
    }

    function setStreetTypeId($streetTypeId) {
        $this->streetTypeId = $streetTypeId;
        return $this;
    }

    function setAddress($address) {
        $this->address = $address;
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

    function setNeighborhood($neighborhood) {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    function setReadjustmentIndexId($readjustmentIndexId) {
        $this->readjustmentIndexId = $readjustmentIndexId;
        return $this;
    }


    function setReasonRentId($reasonRentId) {
        $this->reasonRentId = $reasonRentId;
        return $this;
    }

    function setElectricalValue($electricalValue) {
        $this->electricalValue = $electricalValue;
        return $this;
    }

    function setWaterValue($waterValue) {
        $this->waterValue = $waterValue;
        return $this;
    }

    function setGasValue($gasValue) {
        $this->gasValue = $gasValue;
        return $this;
    }

    public function toArray() {
        return [
            "cep" => $this->cep,
            "coverage_inner_painting" => $this->coverageInnerPainting,
            "coverage_outer_painting" => $this->coverageOuterPainting,
            "coverage_property_damage" => $this->coveragePropertyDamage,
            "coverage_contract_termination_fine" => $this->coverageContractTerminationFine,
            "rent_value" => $this->rentValue,
            "condominum_value" => $this->condominumValue,
            "iptu_value" => $this->iptuValue,
            "validity_duration"=> $this->validityDuration,
            "street_type_id"=> $this->streetTypeId,
            "address"=>$this->address,
            "address_number"=>$this->addressNumber,
            "address_complement"=>$this->addressComplement,
            "neighborhood"=>$this->neighborhood,
            "readjustment_index_id"=>$this->readjustmentIndexId,
            "type_id"=>$this->typeId,
            "reason_rent_id"=>$this->reasonRentId,
            "electrical_value"=> $this->electricalValue,
            "water_value"=>$this->waterValue,
            "gas_value"=>$this->gasValue];
    }

}
