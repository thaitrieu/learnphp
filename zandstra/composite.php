<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 07-10-2014
 * Time: 11:32
 */
abstract class Unit {
    abstract function addUnit(Unit $unit);
    abstract function removeUnit(Unit $unit);
    abstract function bombardStrength();
}

abstract class CompositeUnit extends Unit {
    private $units = [];

    function getComposite(){
        return $this;
    }

    protected function units(){
        return $this->units;
    }

    function addUnit(Unit $unit){
        if(in_array($unit, $this->units, true)){
            return;
        }
        $this->units[] = $unit;
    }

    function removeUnit(Unit $unit){
        $this->units = array_udiff($this->units, array($unit),
            function($a, $b) { return ($a === $b) ? 0 : 1; } );
    }
}

class Army extends CompositeUnit {
    private $units = [];

    function addUnit(Unit $unit) {
        if(in_array($unit, $this->units, true)){
            return;
        }
        $this->units[] = $unit;
    }

    function removeUnit(Unit $unit) {
        $this->units = array_udiff($this->units, array($unit),
            function($a, $b) {return ($a === $b) ? 0 : 1;});
    }

    function bombardStrength(){
        $ret = 0;

        foreach($this->units as $unit){
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}

class Archer extends Unit {

    function addUnit(Unit $unit){
        throw new Exception('fejl');
    }

    function removeUnit(Unit $unit){
        throw new Exception('fejl');
    }

    function bombardStrength(){
        return 4;
    }
}

class LaserCannonUnit extends Unit {

    function addUnit(Unit $unit){
        throw new Exception('fejl');
    }

    function removeUnit(Unit $unit){
        throw new Exception('fejl');
    }

    function bombardStrength(){
        return 10;
    }
}

$main_army = new Army();

$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannonUnit());

$sub_army = new Army();

$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());

$main_army->addUnit($sub_army);

print "attacking with strength: {$main_army->bombardStrength()}";