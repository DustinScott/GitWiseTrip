<?php

$jobsSS = array('john','housekeeping','window washing','car detailing');

echo '<ul>';
foreach($jobsSS as $key =>$jobs){
echo '<li>['.$key.'] '.$jobs.'</li>';
}
echo '</ul>';
	
	
?>