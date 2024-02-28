<?php


class Validate
{
    static function validInTime ($inTime)
    {
        return in_array($inTime, DataLayer::getInTime());
    }
    static function validOutTime($outTime)
    {
        if($outTime == "")
        {
            return false;
        }
        else {
            return true;
        }
    }
}