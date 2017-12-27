<?php

$time = $_REQUEST['time'];
$name = $_REQUEST['name'];
if (($time == "morning")||($time == "afternoon")||($time == "evening")||($time == "night"))
{
echo "good " .$time. " ".$name;
}
else 
	echo "Plz give correct time";
?>
