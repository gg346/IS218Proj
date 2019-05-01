<?php
/**
 * Created by PhpStorm.
 * User: YoungB
 * Date: 5/1/2019
 * Time: 1:32 PM
 */

class Record
{
    private $data =array();

    public function __construct(array $year,array $makes)
    {
        $records = ArrayFunctions::combineArray($year, $makes);
        foreach ($records as $column => $make) {
            self::createCell($column, $make);
        }
    }
    public function createCell($column, $make){
        $this->{$column} = $make;
    }
    function getData(): array
    {
            return $this->data;
    }

}