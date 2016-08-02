<?php

namespace Jimdo;

use PHPUnit\Framework\TestCase;

class LeapYearServiceTest extends TestCase
{
    /** @var \Jimdo\Util\LeapYearService */
    private $leapYearService;

    public function setUp()
    {
        $this->leapYearService = new Util\LeapYearService();
    }

    /**
     * @test
     */
    public function isLeapYear()
    {
        $noLeapYears = array(
            1700, 1800, 1900, 2100, 2200, 2300, 2500, 2600
        );

        $leapYears = array(
            1600, 2000, 2400
        );

        foreach ($noLeapYears as $aYear) {
            $this->assertFalse(
                $this->leapYearService->isLeapYear($aYear),
                "$aYear must not be a leap year!"
            );
        }

        foreach ($leapYears as $aYear) {
            $this->assertTrue(
                $this->leapYearService->isLeapYear($aYear),
                "$aYear must be a leap year!"
            );
        }
    }
}
