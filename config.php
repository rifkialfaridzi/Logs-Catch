<?php
function test(){
	echo "string";
}
$file = fopen("logData/simple_logs 2.txt", "r"); // Data Logs
$members = array();

while (!feof($file)) {
   $members[] = fgets($file);
}

fclose($file);
//$gg = array('sas','k');

echo json_encode($members);
die();

?>
