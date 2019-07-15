<?php


namespace app\libutils;


use DateTime;

class DateUtils
{
    public static function toIsoDate($date)
    {
        return DateTime::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y');
    }

    public static function toFullIsoDate($date)
    {
        return DateTime::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y H:i:s');
    }

    public static function toDate($date) {
        return DateTime::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }
}