<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 08-10-2014
 * Time: 10:10
 */
namespace Database;

class Database {
    protected  $adapter;

    /*
     * Give the class its dependency instead of creating it (loose coupling)
     */
    public function __construct(AdapterInterface $adapter) {
        $this->adapter = $adapter;
    }
}

interface AdapterInterface {}

class MySqlAdapter implements AdapterInterface {}