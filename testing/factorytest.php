<?php
/**
 * Created by PhpStorm.
 * User: Bhavik
 * Date: 2019-04-25
 * Time: 12:01
 */

declare(strict_types=1);

use IS218Proj\Framework\TestCase;

final class FactoryTest extends TestCase
{
    public function testFactoryFileExists() {
        $this->assertFileExists('/G:/Spring 2019/IS218/IS218Proj/src old/factory.php');
    }
    public function testFailure() {
        $this->assetFileIsReadable('/G:/Spring 2019/IS218/IS218Proj/src old/factory.php');
    }
    public function testFileObject() {
        $this->assertInstanceOf(Factory::create(), new Factory());
    }
}