<?php

namespace Plekhub\Pleksdk\Methods;

/**
 * Description of GetTiposDePessoa
 *
 * @author cleomar
 */
class GetPersonTypeMethod extends AMethod{

    protected $endpoint = "resource/person-type";

    /**
     * 
     * @return \Plekhub\Pleksdk\Entities\BasicEntity[]
     */
    public function execute() {
        $this->requisition->setEndpoint($this->endpoint);
        $response = $this->requisition->request();
        $response = str_replace("-", "_", $response);
        $objectResponse = json_decode($response);
        if ($objectResponse && $objectResponse->status == "success") {
            $data = $objectResponse->data->person_type;
            $return = [];
            foreach ($data as $maritalStatus) {
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
