<?php
/**
 * Created by PhpStorm.
 * User: YoungB
 * Date: 5/1/2019
 * Time: 1:15 PM
 */

class ArrayFunctions
{
    public static function combineArray(array $key, array $val)
    {
        return array_combine($key, $val);
    }
    public static function getYearOfCar(Array $records)
    {
        return (sizeof($records)-1);
    }
    public static function printArrayKeys(Array $records)
    {
        return array_keys(self::getObjectVariableFromArray($records[0]));
    }
    public static function printArrayValues(Array $records)
    {
        $values = self::makeArray();
        for ($i = 0; $i <= self::getYearOfCar($records); $i++) {
            $values[] = self::getObjectVariableFromArray($records[$i]);
        }
        return $values;
    }
    public static function makeArray()
    {
        return Array();
    }

}