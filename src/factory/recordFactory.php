<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 4/25/2019
 * Time: 12:50 PM
 */

namespace
use

class recordFactory
{
    public static function create(Array $data) {
        return new record($data);
    }
}