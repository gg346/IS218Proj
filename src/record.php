<?php
/**
 * Created by PhpStorm.
 * User: extnddthght
 * Date: 2019-04-10
 * Time: 23:45
 */

use takeCSV;
use setUpWeb;
use Factory;
use Pokedex;
class record {
    public function __construct(Array $Pokemon = null, $values = null )
    {
        $record = array_combine($Pokemon, $values);
        foreach ($record as $property => $value) {
            $this->createProperty($property, $value);
        }
    }
    public function returnArray() {
        $items = (array) $this;
        return $items;
    }
    public function createProperty($pokemonName = 'one', $row = 'Number Pokemon Type') {
        $this->{$pokemonName} = $row;
    }
}