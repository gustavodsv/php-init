<?php
date_default_timezone_set('America/Sao_Paulo');

$date = new DateTime('2021-01-01 20:00:00');
$date2 = new DateTime('2021-05-30');

# add time
$date->add( DateInterval::createFromDateString('2 days 2 hours 1 minute 2 seconds'));
#sub time
$date->sub( DateInterval::createFromDateString('2 days 2 hours 1 minute 2 seconds'));

// $date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

# show date format
echo $date->format('d-m-Y H:i:s');

echo "<hr>";

# check -> highest date
if ($date > $date2){
    echo "date 1 > que date 2";
} else {
    echo "date 2 > que date 1";
}

echo "<hr>";

# return number of days, month, years...
$today = new DateTime();
$niver = new DateTime('2022-05-30 00:00:00');

$diff = $today->diff($niver);
echo $diff->format('%a days, %m month, %y years, %h hours, %i minutes, %s seconds');