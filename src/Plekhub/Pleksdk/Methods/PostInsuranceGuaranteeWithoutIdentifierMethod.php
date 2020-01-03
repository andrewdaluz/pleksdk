<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Methods;

/**
 * Description of PostInsuranceGuaranteeWithoutIdentifierMethod
 *
 * @author cleomar
 */
class PostInsuranceGuaranteeWithoutIdentifierMethod extends AMethod {

    private $renters = [];
    private $propety;

    public function addRenter(\Plekhub\Pleksdk\Entities\RenterWithoutIdentifierEntity $renter = null) {
        if ($renter === null) {
            $renter = new \Plekhub\Pleksdk\Entities\RenterWithoutIdentifierEntity();
        }
        $this->renters[] = $renter;
        return $renter;
    }

    public function propety(\Plekhub\Pleksdk\Entities\PropetyWithoutIdentifierEntity $propety = null) {
        if ($propety === null) {
            $propety = new \Plekhub\Pleksdk\Entities\PropetyWithoutIdentifierEntity();
        }
        $this->propety = $propety;
        return $propety;
    }

    public function execute() {
        $this->requisition->setEndpoint($this->endpoint);
        $this->requisition->setBody($this->createBody());
        $response = $this->requisition->request();
        $objectResponse = json_decode($response);
        if ($objectResponse && $objectResponse->status == "success") {
            $data = (array) $objectResponse->data->budgets;
            $return = [];
            foreach ($data as $budget => $budgetData) {
                $return[$budget] = new \Plekhub\Pleksdk\Entities\BudgetsEntity();
                $return[$budget]->setId($budgetData->id);
                $return[$budget]->setInsuranceCompany($budgetData->insuranceCompany);

                $coverage = new \Plekhub\Pleksdk\Entities\CoverageEntity();
                $coverage->setRent($budgetData->coverage->rent);
                $coverage->setCondominium($budgetData->coverage->condominium);
                $coverage->setEletric($budgetData->coverage->eletric);
                $coverage->setIptu($budgetData->coverage->iptu);
                $coverage->setWater($budgetData->coverage->water);
                $coverage->setGas($budgetData->coverage->gas);

                $return[$budget]->setCoverage($coverage);

                $prize = new \Plekhub\Pleksdk\Entities\PrizeEntity();
                $prize->setEmergencyValue($budgetData->prize->emergencyValue);
                $prize->setNetValue($budgetData->prize->netValue);
                $prize->setPolicyCost($budgetData->prize->policyCost);
                $prize->setIofValue($budgetData->prize->iofValue);
                $prize->setTotal($budgetData->prize->total);
                
                $return[$budget]->setPrize($prize);
                
                $installmentPlans = [];
                foreach($budgetData->installmentPlans as $installmentPlan){
                    $installmentPlanEntity = new \Plekhub\Pleksdk\Entities\InstallmentPlansEntity();
                    $installmentPlanEntity->setChargeValue($installmentPlan->chargeValue);
                    $installmentPlanEntity->setId($installmentPlan->id);
                    $installmentPlanEntity->setDescription($installmentPlan->description);
                    $installmentPlanEntity->setFirstInstallmentValue($installmentPlan->firstInstallmentValue);
                    $installmentPlanEntity->setInstallmentQuantity($installmentPlan->installmentQuantity);
                    $installmentPlanEntity->setInterestTax($installmentPlan->interestTax);
                    $installmentPlanEntity->setInterestValue($installmentPlan->interestValue);
                    $installmentPlanEntity->setIofValue($installmentPlan->iofValue);
                    $installmentPlanEntity->setPaymentType($installmentPlan->paymentType);
                    $installmentPlanEntity->setPolicyValue($installmentPlan->policyValue);
                    $installmentPlanEntity->setRemainingInstallmentsValue($installmentPlan->remainingInstallmentsValue);
                    $installmentPlanEntity->setTotalValue($installmentPlan->totalValue);
                    $installmentPlans[] = $installmentPlanEntity;
                }
                $return[$budget]->setInstallmentPlans($installmentPlans);
            }
            return $return;
           
        }
    }

    private function createBody() {
        $bodyArray = [];
        $bodyArray["Renter"] = [];
        foreach ($this->renters as $renter) {
            $bodyArray["Renter"][] = $renter->toArray();
        }
        $bodyArray["Property"] = $this->propety->toArray();

        $queryString = http_build_query($bodyArray);
        $queryStringArray = explode("&", $queryString);
        $body = "{";
        foreach ($queryStringArray as $data) {
            if (!$data) {
                continue;
            }
            $dataToJson = explode("=", $data);
            $body .= '"' . $dataToJson[0] . '": "' . $dataToJson[1] . '",';
        }
        $body = rtrim($body, ",");
        $body = $body . "}";
        return $body;
    }
    

}
