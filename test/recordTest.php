<?php
/**
 * Created by PhpStorm.
 * User: extnddthght
 * Date: 2019-04-11
 * Time: 00:07
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class RecordTest extends TestCase
{
    public function testRecordObject() {
        $this->assertInstanceOf(Record::class, new Record([1,2], [1,2]));
    }
}