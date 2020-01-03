<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Plekhub\Pleksdk\Authentication;

/**
 * Description of Factory
 *
 * @author cleomar
 */
class Factory {
    public static function getBasicAuth($apiApp,$apiSecret){
        return new Basic($apiApp,$apiSecret);
    }
}
