<?php
/**
 * Created by PhpStorm.
 * User: tt
 * Date: 08-10-2014
 * Time: 09:39
 */
$raw = "12/11/1968";
$start = DateTime::createFromFormat("m/d/Y",$raw);

//echo "start date: " . $start->format("d/m/Y") . "<br>";

$end = clone $start;
$end->add(new DateInterval("P1M6D"));

$diff = $end->diff($start);

//echo "difference: " . $diff->format("%m month, %d days, %y years (total: %a days)");

$periodInterval = DateInterval::createFromDateString("first thursday");
$periodIterator = new DatePeriod($start, $periodInterval, $end, DatePeriod::EXCLUDE_START_DATE);
foreach($periodIterator as $date){
    echo $date->format('m/d/Y') . ' ';
}
