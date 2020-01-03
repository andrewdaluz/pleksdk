<?php

namespace Plekhub\Pleksdk\Authentication;

/**
 * Description of Basic
 *
 * @author cleomar
 */
class Basic implements IAuthentication{
    private $apiApp;
    private $apiSecret;
    
    public function __construct($apiApp,$apiSecret) {
        $this->apiApp = $apiApp;
        $this->apiSecret = $apiSecret;
    }
    public function getHeader() {
        return "Authorization: Basic ".base64_encode("{$this->apiApp}:{$this->apiSecret}");
    }

}
