<?php

namespace Plekhub\Pleksdk\Requisition;

/**
 * Description of ARequisition
 *
 * @author cleomar
 */
abstract class ARequisition {

    protected $headers = [];
    protected $endpoint;
    protected $query;
    protected $body;
    protected $url;
    protected $verb;
    
    public function __construct($url) {
        $this->url = $url;
    }

    public function setHeaders(array $headers) {
        $this->headers = $headers;
        return $this;
    }
    
    public function addHeaders($header){
        $this->headers[] = $header;
        return $this;
    }

    public function setEndpoint($endpoint) {
        $this->endpoint = $endpoint;
        return $this;
    }

    public function setQuery(array $query) {
        $this->query = $query;
        return $this;
    }

    public function setBody($body) {
        $this->body = $body;
        return $this;
    }
    public function setVerb($verb){
        $this->verb = $verb;
        return $this;
    }

    abstract function request();
}
