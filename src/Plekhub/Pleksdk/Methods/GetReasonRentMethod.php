<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Methods;

/**
 * Description of getReasonRentMethod
 *
 * @author cleomar
 */
class GetReasonRentMethod extends AMethod {
    protected $endpoint = "resource/reason-rent";
    /**
     * 
     * @return \Plekhub\Pleksdk\Entities\BasicEntity[]
     */
    public function execute() {
        $this->requisition->setEndpoint($this->endpoint);
        $response = $this->requisition->request();
        $response = str_replace("-", "_", $response);
        $objectResponse = json_decode($response);
        if($objectResponse && $objectResponse->status == "success"){
            $data = $objectResponse->data->reason_rent;
            $return = [];
            foreach($data as $maritalStatus){
                $basicEntity = new \Plekhub\Pleksdk\Entities\BasicEntity();
                $basicEntity->setId($maritalStatus->id);
                $basicEntity->setName($maritalStatus->name);
                $return[] = $basicEntity;
            }
            return $return;
        }
        throw new \Plekhub\Pleksdk\Exceptions\ValidationException($objectResponse->message);
        
    }
    
}
