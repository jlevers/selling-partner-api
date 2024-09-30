<?php

namespace SellingPartnerApi\Tests\Seller\ReportsV20210630\Responses;

use DateTime;
use DateTimeInterface;
use PHPUnit\Framework\TestCase;
use SellingPartnerApi\Exceptions\UnknownDatetimeFormatException;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\Report;

class ReportTest extends TestCase
{
    public function testDeserialize()
    {
        $nullResult = Report::deserialize(null);
        $this->assertNull($nullResult);
    }

    public function testDeserializeUnknownDateTime()
    {
        // German DateTime Format should throw an exception as it is not one of the valid formats
        $this->expectException(UnknownDatetimeFormatException::class);
        Report::deserialize([
            'createdTime' => '20.06.2024 17:15:33',
        ]);
    }

    public function testDeserializeDateTime()
    {
        $now = new DateTime;
        $result = Report::deserialize([
            'reportId' => 12345,
            'reportType' => 'TEST_REPORT',
            'createdTime' => $now->format(DATE_ATOM),
            'processingStatus' => 'IN_QUEUE',
        ]);
        $this->assertNotNull($result);
        $this->assertInstanceOf(DateTimeInterface::class, $result->createdTime);
    }
}
