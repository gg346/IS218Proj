<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 5/1/2019
 * Time: 2:39 PM
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class CarTest extends Testcase
{
    public function testCSVFileExists()
    {
        $this->assertFileExists('data/Cars.csv');
    }
    public function testTableFile()
    {
        echo file_exists('table');
    }
    public function testIndexFile()
    {
        echo file_exists('index');
    }
    public function testRecordFactoryFile()
    {
        echo file_exists('recordFactory');
    }
    public function testCSVLoadFile()
    {
        echo file_exists('csvLoad');
    }
    public function testSRCDirectory()
    {
        $this->assertDirectoryExists('src');
    }
    public function testFactoryDirectory()
    {
        $this->assertDirectoryExists('factory');
    }
    public function testFileDirectory()
    {
        $this->assertDirectoryExists('file');
    }
    public function testModelsDirectory()
    {
        $this->assertDirectoryExists('models');
    }
    public function testDatabaseDirectory()
    {
        $this->assertDirectoryExists('database');
    }
}
