<?php

function time2str($ts)
{
    if(!ctype_digit($ts))
        $ts = strtotime($ts);

    $diff = time() - $ts;
    if($diff == 0)
        return 'now';
    elseif($diff > 0)
    {
        $day_diff = floor($diff / 86400);
        if($day_diff == 0)
        {
            if($diff < 60) return 'هم اکنون';
            if($diff < 120) return '1 دقیقه ';
            if($diff < 3600) return floor($diff / 60) . ' دقیقه ';
            if($diff < 7200) return '1 ساعت ';
            if($diff < 86400) return floor($diff / 3600) . ' ساعت ';
        }
        if($day_diff == 1) return 'دیروز';
        if($day_diff < 7) return $day_diff . ' روز ';
        if($day_diff < 31) return ceil($day_diff / 7) . ' هفته ';
        if($day_diff < 60) return 'ماه گذشته';
        return date('F Y', $ts);
    }
    else
    {
        $diff = abs($diff);
        $day_diff = floor($diff / 86400);
        if($day_diff == 0)
        {
            if($diff < 120) return 'in a minute';
            if($diff < 3600) return 'in ' . floor($diff / 60) . ' minutes';
            if($diff < 7200) return 'in an hour';
            if($diff < 86400) return 'in ' . floor($diff / 3600) . ' hours';
        }
        if($day_diff == 1) return 'Tomorrow';
        if($day_diff < 4) return date('l', $ts);
        if($day_diff < 7 + (7 - date('w'))) return 'next week';
        if(ceil($day_diff / 7) < 4) return 'in ' . ceil($day_diff / 7) . ' weeks';
        if(date('n', $ts) == date('n') + 1) return 'next month';
        return date('F Y', $ts);
    }
}

?>