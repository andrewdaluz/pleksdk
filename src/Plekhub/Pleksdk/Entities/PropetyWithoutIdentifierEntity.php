<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of PropetyEntity
 *
 * @author cleomar
 */
class PropetyWithoutIdentifierEntity {

    protected $typeId;
    protected $cep;
    protected $coverageInnerPainting;
    protected $coverageOuterPainting;
    protected $coveragePropertyDamage;
    protected $coverageContractTerminationFine;
    protected $rentValue;
    protected $condominumValue;
    protected $iptuValue;

    function getTypeId() {
        return $this->typeId;
    }

    function getCep() {
        return $this->cep;
    }

    function getCoverageInnerPainting() {
        return $this->coverageInnerPainting;
    }

    function getCoverageOuterPainting() {
        return $this->coverageOuterPainting;
    }

    function getCoveragePropertyDamage() {
        return $this->coveragePropertyDamage;
    }

    function getCoverageContractTerminationFine() {
        return $this->coverageContractTerminationFine;
    }

    function getRentValue() {
        return $this->rentValue;
    }

    function getCondominumValue() {
        return $this->condominumValue;
    }

    function getIptuValue() {
        return $this->iptuValue;
    }

    function setTypeId($typeId) {
        $this->typeId = $typeId;
        return $this;
    }

    function setCep($cep) {
        $this->cep = $cep;
        return $this;
    }

    function setCoverageInnerPainting($coverageInnerPainting) {
        $this->coverageInnerPainting = $coverageInnerPainting;
        return $this;
    }

    function setCoverageOuterPainting($coverageOuterPainting) {
        $this->coverageOuterPainting = $coverageOuterPainting;
        return $this;
    }

    function setCoveragePropertyDamage($coveragePropertyDamage) {
        $this->coveragePropertyDamage = $coveragePropertyDamage;
        return $this;
    }

    function setCoverageContractTerminationFine($coverageContractTerminationFine) {
        $this->coverageContractTerminationFine = $coverageContractTerminationFine;
        return $this;
    }

    function setRentValue($rentValue) {
        $this->rentValue = $rentValue;
        return $this;
    }

    function setCondominumValue($condominumValue) {
        $this->condominumValue = $condominumValue;
        return $this;
    }

    function setIptuValue($iptuValue) {
        $this->iptuValue = $iptuValue;
        return $this;
    }

    public function toArray() {
        return ["type_id" => $this->typeId,
            "cep" => $this->cep,
            "coverage_inner_painting" => $this->coverageInnerPainting,
            "coverage_outer_painting" => $this->coverageOuterPainting,
            "coverage_property_damage" => $this->coveragePropertyDamage,
            "coverage_contract_termination_fine" => $this->coverageContractTerminationFine,
            "rent_value" => $this->rentValue,
            "condominum_value" => $this->condominumValue,
            "iptu_value" => $this->iptuValue];
    }

}
