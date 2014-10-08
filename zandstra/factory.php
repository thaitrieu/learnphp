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

class MegaApptEncoder extends ApptEncoder {
    function encode() {
        return "Appointment data encode in MegaCal format\n";
    }
}

abstract class CommsManager {
    abstract function getHeaderText();
    abstract function getApptEncoder();
    abstract function getFooterText();
}

/*
 * The creator
 */
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
$mgr2 = new MegaApptEncoder();
$encoder = $mgr2->encode();

var_dump($encoder);
