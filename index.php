<?php

$jobsSS = array('bob','housekeeping','window washing','car detailing','2 more','squelsh');

echo '<ul>';
foreach($jobsSS as $key =>$jobs){
echo '<li>['.$key.'] '.$jobs.'</li>';
}
echo '</ul>';
	
	
?>