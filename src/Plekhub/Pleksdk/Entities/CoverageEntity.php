<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of CoverageEntity
 *
 * @author cleomar
 */
class CoverageEntity {

    private $rent;
    private $condominium;
    private $eletric;
    private $iptu;
    private $water;
    private $gas;
    function getRent() {
        return $this->rent;
    }

    function getCondominium() {
        return $this->condominium;
    }

    function getEletric() {
        return $this->eletric;
    }

    function getIptu() {
        return $this->iptu;
    }

    function getWater() {
        return $this->water;
    }

    function setRent($rent) {
        $this->rent = $rent;
    }

    function setCondominium($condominium) {
        $this->condominium = $condominium;
    }

    function setEletric($eletric) {
        $this->eletric = $eletric;
    }

    function setIptu($iptu) {
        $this->iptu = $iptu;
    }

    function setWater($water) {
        $this->water = $water;
    }
    function getGas() {
        return $this->gas;
    }

    function setGas($gas) {
        $this->gas = $gas;
    }



}
