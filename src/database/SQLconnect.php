<?php
/**
 * Created by PhpStorm.
 * User: Bhavik & Luke
 * Date: 4/20/2019
 * Time: 2:56 PM
 */

class SQLConnect
{
    private $pdo;

    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite" . Config::PATH_TO_SQLITE_FILE);
        }
        return $this->pdo;
    }
}