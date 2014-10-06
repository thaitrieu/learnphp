<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 06-10-2014
 * Time: 15:07
 */
abstract class ApptEncoder {
    abstract function encode();
}

class BloggsApptEncoder extends ApptEncoder {
    function encode() {
        return "Appointment data encode in BloggsCal format\n";
    }
}

abstract class CommsManager {
    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getFooterText();
}

class BloggsCommsManager extends CommsManager {
    function getHeaderText() {
        return "BloggsCal header\n";
    }

    function getApptEncoder() {
        return new BloggsApptEncoder();
    }

    function getFooterText() {
        return "BloggsCal footer\n";
    }
}

$mgr = new BloggsCommsManager();
$encoder = $mgr->getApptEncoder();
$encoder2 = $mgr->getApptEncoder();

var_dump($mgr);
var_dump($encoder);
var_dump($encoder2);
