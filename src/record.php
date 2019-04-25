<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 2019-04-10
 * Time: 23:45
 */

use takeCSV;
use setUpWeb;
use Factory;
use cars;

class record {
    public function __construct(Array $Car = null, $values = null )
    {
        $record = array_combine($Car, $values);
        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }
    }
    public function returnArray() {
        $items = (array) $this;
        return $items;
    }
    public function createProperty($carName = 'one', $row = 'Model Year') {
        $this->{$carName} = $row;
    }
}