<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Entities;

/**
 * Description of InstallmentPlansEntity
 *
 * @author cleomar
 */
class InstallmentPlansEntity {

    private $id;
    private $paymentType;
    private $description;
    private $installmentQuantity;
    private $firstInstallmentValue;
    private $remainingInstallmentsValue;
    private $interestValue;
    private $chargeValue;
    private $policyValue;
    private $iofValue;
    private $interestTax;
    private $totalValue;
    function getId() {
        return $this->id;
    }

    function getPaymentType() {
        return $this->paymentType;
    }

    function getDescription() {
        return $this->description;
    }

    function getInstallmentQuantity() {
        return $this->installmentQuantity;
    }

    function getFirstInstallmentValue() {
        return $this->firstInstallmentValue;
    }

    function getRemainingInstallmentsValue() {
        return $this->remainingInstallmentsValue;
    }

    function getInterestValue() {
        return $this->interestValue;
    }

    function getChargeValue() {
        return $this->chargeValue;
    }

    function getPolicyValue() {
        return $this->policyValue;
    }

    function getIofValue() {
        return $this->iofValue;
    }

    function getInterestTax() {
        return $this->interestTax;
    }

    function getTotalValue() {
        return $this->totalValue;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPaymentType($paymentType) {
        $this->paymentType = $paymentType;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setInstallmentQuantity($installmentQuantity) {
        $this->installmentQuantity = $installmentQuantity;
    }

    function setFirstInstallmentValue($firstInstallmentValue) {
        $this->firstInstallmentValue = $firstInstallmentValue;
    }

    function setRemainingInstallmentsValue($remainingInstallmentsValue) {
        $this->remainingInstallmentsValue = $remainingInstallmentsValue;
    }

    function setInterestValue($interestValue) {
        $this->interestValue = $interestValue;
    }

    function setChargeValue($chargeValue) {
        $this->chargeValue = $chargeValue;
    }

    function setPolicyValue($policyValue) {
        $this->policyValue = $policyValue;
    }

    function setIofValue($iofValue) {
        $this->iofValue = $iofValue;
    }

    function setInterestTax($interestTax) {
        $this->interestTax = $interestTax;
    }

    function setTotalValue($totalValue) {
        $this->totalValue = $totalValue;
    }



}
