<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 4/25/2019
 * Time: 12:47 PM
 */

include 'csvLoad.php';
include 'table.php';

class bootstrap
{
    public function __construct(string $filePath)
    {
        $records = csvLoad::returnArray($filePath);

        $record = array('year' => '2019', 'Make' => 'Audi', 'A6' => 'yes');
        $object = factory\recordFactory::create($record);
        print_r($object);
        echo table::table('stuff');
    }
}
