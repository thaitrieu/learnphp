<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 07-10-2014
 * Time: 09:41
 */
class Sea {
    private $navigability = 0;

    function __construct($navigability){
        $this->navigability = $navigability;
    }

    public function setNav($navigability){
        $this->navigability = $navigability;
    }
}
class EarthSea extends Sea {}
class MarsSea extends Sea {}

class Plain {}
class EarthPlain extends Plain {}
class MarsPlain extends Plain {}

class Forest {}
class EarthForest extends Forest {}
class MarsForest extends Forest {}

class TerrainFactory {
    private $sea;
    private $plain;

    public function __construct(Sea $sea, Plain $plain){
        $this->sea = $sea;
        $this->plain = $plain;
    }

    public function getSea(){
        return clone $this->sea;
    }

    public function getPlain(){
        return clone $this->plain;
    }
}

$factory = new TerrainFactory(new EarthSea(-5), new MarsPlain(), new EarthForest());
$newSea = $factory->getSea();
$newSea->setNav(10);

var_dump($factory);
var_dump($newSea);