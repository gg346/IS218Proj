<?php
/**
 * Created by PhpStorm.
 * User: Bhavik & Luke
 * Date: 2/19/2019
 * Time: 3:28 PM
 */

include 'ArrayFunctions.php';
include 'RecordFactory.php';
include 'csvLoad.php';
include 'CarsList.php';
include 'Record.php';


include "Autoload.php";
class File
{
    public static function readCSVtoArray(String $filename, String $class): array
    {
        $records = ArrayFunctions::makeArray();
        $count = 0;
        $fieldNames = '';
        $handle = CsvFunctions::openCSVFile($filename);
        while ($row = CsvFunctions::retrieveRowsFromCSVFile($handle)) {
            if ($count == 0) {
                $fieldNames = $row;
            } else {
                $records[] =(object)RecordFactory::buildArray($fieldNames, $row);
            }
            $count++;
        }
        CsvFunctions::closeCSV($handle);
        return $records;
    }
    public static function printArrayAsTable(Array $records): string
    {
        $row = (HtmlTags::BeginOfHtml());
        $fieldnames = ArrayFunctions::printArrayKeys($records);
        $values = ArrayFunctions::printArrayValues($records);
        foreach ($fieldnames as $fieldname)
        {
            $row .= HtmlTags::HeaderCellTags($fieldname);
        }
        $row .= (HtmlTags::MidOfHtml());
        foreach ($values as $value)
        {
            $row .= HtmlTags::BeginOfRow();
            foreach ($fieldnames as $fieldname) {
                $row .= HtmlTags::RowCellTags($value[$fieldname]);
            }
            $row .= HtmlTags::EndOfRow();
        }
        $row .= (HtmlTags::EndOfHtml());
        return $row;
    }
}