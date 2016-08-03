<?php

namespace Jimdo\Util;

class LeapYearService
{
    public function isLeapYear($aYear)
    {
        /*
        $bool = false

        wenn ($jahrX % 4) == 0
        $bool = true

        wenn ($jahrX % 100) == 0
        $bool = false

        wenn ($jahrX % 400) == 0
        $bool = true

        return $bool
        */
        $yearBool = false;
        if ($aYear % 4 == 0) {
            $yearBool = true;

            if ($aYear % 100 == 0) {
                $yearBool = false;

                if ($aYear % 400 == 0) {
                    $yearBool = true;
                }
            }

            return $yearBool;
        }
    }
}
