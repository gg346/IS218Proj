<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 4/25/2019
 * Time: 12:11 PM
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CarsTest extends TestCase
{
    public function testDataDirectory() {
        $this->assertDirectoryExists('data');
    }
    public function testCSVFileExists() {
        $this->assertFileExists('/data/Cars.csv');
    }
    public function testreadCarstoTableworks() {
        $this->assertClassHasAttribute(CarModels::class,new Cars());
    }
    public function testSRCDirectory(){
        $this->testSRCDirectory('src old');
    }

}