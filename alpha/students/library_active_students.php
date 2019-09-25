<?php
$counter = 0;
$result = $db->connect()->query("SELECT * FROM `library_log` WHERE `date` = CURRENT_DATE() AND `time_out` = '00:00:00' ");
while($row = $result->fetch_object()){
  $counter ++;
}
echo $counter;