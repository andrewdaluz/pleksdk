<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Methods;

/**
 * Description of PostContractMethod
 *
 * @author cleomar
 */
class PostContractMethod extends AMethod {

    private $budget;
    private $insuranceCompany;
    private $choosenPlan;
    private $landLord;

    private function createBody() {
        $bodyArray = [];

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

    public function execute() {
        
    }

}
