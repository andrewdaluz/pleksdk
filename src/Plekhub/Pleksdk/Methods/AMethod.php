<?php
namespace Plekhub\Pleksdk\Methods;

/**
 * Description of AMethod
 *
 * @author cleomar
 */
abstract class AMethod {
    protected $endpoint;
    /**
     *
     * @var \Plekhub\Pleksdk\Requisition\ARequisition
     */
    protected $requisition;
    protected $authentication;
    public function __construct(\Plekhub\Pleksdk\Requisition\ARequisition $requisition, \Plekhub\Pleksdk\Authentication\IAuthentication $authentication) {
        $this->requisition = $requisition;
        $this->authentication = $authentication;
        $this->requisition->addHeaders($authentication->getHeader());
        $this->requisition->addHeaders("Content-Type:application/json");
    }
    
    abstract function execute();
}
