<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 4/25/2019
 * Time: 12:53 PM
 */

class csvLoad
{
    public static function returnArray(String $filePath) :array
    {
        $file = fopen($filePath, "r");
        $records = array();

        while (! feof(file))
        {
            $records[] =fgetcsv($file);
        }

        fclose($file);
        return $records;
    }
}