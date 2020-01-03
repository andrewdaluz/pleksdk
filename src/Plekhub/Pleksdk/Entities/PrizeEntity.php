<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of PrizeEntity
 *
 * @author cleomar
 */
class PrizeEntity {

    private $emergencyValue;
    private $netValue;
    private $policyCost;
    private $iofValue;
    private $total;
    
    function getEmergencyValue() {
        return $this->emergencyValue;
    }

    function getNetValue() {
        return $this->netValue;
    }

    function getPolicyCost() {
        return $this->policyCost;
    }

    function getIofValue() {
        return $this->iofValue;
    }

    function getTotal() {
        return $this->total;
    }

    function setEmergencyValue($emergencyValue) {
        $this->emergencyValue = $emergencyValue;
    }

    function setNetValue($netValue) {
        $this->netValue = $netValue;
    }

    function setPolicyCost($policyCost) {
        $this->policyCost = $policyCost;
    }

    function setIofValue($iofValue) {
        $this->iofValue = $iofValue;
    }

    function setTotal($total) {
        $this->total = $total;
    }


}
