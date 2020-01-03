<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Exceptions;

/**
 * Description of ValidationException
 *
 * @author cleomar
 */
class ValidationException extends \Exception{
    private $erros;
    public function __construct($message = "", $code = 0, \Throwable $previous = null,$erros = null) {
        parent::__construct($message, $code, $previous);
        $this->erros = $erros;
    }
    
    public function getErros(){
        return $this->erros;
    }
}
