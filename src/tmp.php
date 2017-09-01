<?php

namespace f;

class tmp
{
  public static function elapsed($time, $date = false)
  {
    if ($date) {
      $time = time() - $time;
    } // to get the time since that moment

    $tokens = [
      31536000 => 'year',
      2592000  => 'month',
      604800   => 'week',
      86400    => 'day',
      3600     => 'hour',
      60       => 'minute',
      1        => 'second',
    ];

    foreach ($tokens as $unit => $text) {
      if ($time < $unit) {
        continue;
      }
      $numberOfUnits = floor($time / $unit);
    }

    return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');
  }
}