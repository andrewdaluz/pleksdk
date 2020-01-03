<?php
namespace Plekhub\Pleksdk\Entities;
/**
 * Description of MatrialStatusEntitie
 *
 * @author cleomar
 */
class BasicEntity {
    private $id;
    private $name;
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function toArray(){
        return ["name"=> $this->name,"id"=> $this->id];
    }

}
