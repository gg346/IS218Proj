<?php
/**
 * Created by PhpStorm.
 * User: YoungB
 * Date: 5/1/2019
 * Time: 1:12 PM
 */


declare(strict_types=1);

abstract class CarsList
{
    public $year;
    public $make;
    public $model;

    public function recentModel(): string
    {}
    public function oldModel(): string
    {}
}

