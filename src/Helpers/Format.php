<?php

namespace Spatie\Backup\Helpers;

use Carbon\Carbon;

class Format
{
    /**
     * @param int $sizeInBytes
     *
     * @return string
     */
    public static function getHumanReadableSize($sizeInBytes)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        if ($sizeInBytes === 0) {
            return '0 '.$units[1];
        }
        for ($i = 0; $sizeInBytes > 1024; ++$i) {
            $sizeInBytes /= 1024;
        }

        return round($sizeInBytes, 2).' '.$units[$i];
    }

    /**
     * @param bool $bool
     *
     * @return string
     */
    public static function getEmoji($bool)
    {
        if ($bool) {
            return 'yes';
        }

        return 'NO';
    }

    public static function ageInDays(Carbon $date) : string
    {
        return number_format(round($date->diffInMinutes() / (24 * 60), 2), 2).' ('.$date->diffForHumans().')';
    }
}
