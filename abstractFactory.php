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

/*
 *
 */

abstract class TtdEncoder {
    abstract function encode();
}



class BloggsTtdEncoder extends TtdEncoder {
    function encode() {
        return "Appointment data encode in BloggsCal format Ny\n";
    }
}

class MegaTtdEncoder extends TtdEncoder {
    function encode() {
        return "Appointment data encode in MegaCal format Ny\n";
    }
}

/*
 *
 */

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

    function getTtdEncoder() {
        return new BloggsTtdEncoder();
    }

    function getFooterText() {
        return "BloggsCal footer\n";
    }
}

$mgr = new BloggsCommsManager();
$encoder = $mgr->getTtdEncoder();
$message = $encoder->encode();

var_dump($message);
