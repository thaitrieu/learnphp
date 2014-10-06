<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 06-10-2014
 * Time: 14:27
 */
class Preferences {
    private $props = [];
    private static $instance;

    private function __construct(){}

    public static function getInstance() {
        if(empty(self::$instance)) {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    public function setProperty($key, $val) {
        $this->props[$key] = $val;
    }

    public function getProperty($key) {
        return $this->props[$key];
    }
}

$pref1 = Preferences::getInstance();
$pref2 = Preferences::getInstance();
$pref3 = Preferences::getInstance();

$pref1->setProperty('thai', 'trieu');

echo $pref2->getProperty('thai');
var_dump($pref1);
var_dump($pref2);
var_dump($pref3);
