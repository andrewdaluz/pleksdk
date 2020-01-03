<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Requisition;

/**
 * Description of Factory
 *
 * @author cleomar
 */
class Factory {
    public static function getCurl($url){
        return new Curl($url);
    }
   
}
