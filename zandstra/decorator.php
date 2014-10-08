<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 08-10-2014
 * Time: 15:41
 */

abstract class Tile {
    abstract function getWealthFactor();
}

class Plains extends Tile {
    private $wealthfactor = 2;
    function getWealthFactor(){
        return $this->wealthfactor;
    }
}

abstract class TileDecorator extends Tile {
    protected $tile;                            //variabel i en abstract klasse?
    function __construct(Tile $tile){
        $this->tile = $tile;
    }
}

class DiamondDecorator extends TileDecorator {
    function getWealthFactor(){
        return $this->tile->getWealthFactor() + 2;
    }
}

class PollutedDecorator extends TileDecorator {
    function getWealthFactor(){
        return $this->tile->getWealthFactor() - 4;
    }
}

$tile = new PollutedDecorator(new DiamondDecorator(new Plains()));
//$tile->wealthfactor = 10;

print $tile->getWealthFactor();