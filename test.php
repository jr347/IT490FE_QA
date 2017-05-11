#!/usr/bin/php
<?php
$deploy = new mysqli('localhost', 'root', 'godemper', 'deploy');

$package = "Select Max(ver) from be";
$response = $deploy->query($package);
$count = $response->num_rows;

if($count >= 0){
	$result = $response->fetch_array(MYSQLI_ASSOC);
	$next = $result['Max(ver)'] + 1;
	$in = "Insert into be (name) values ('beqav-$next')";
	$a = $deploy->query($in);
	echo $result['Max(ver)']."\n";
}
elseif($count == 0){
	$result = $response->fetch_array(MYSQLI_ASSOC);
	$next = $result['Max(ver)'] + 1;
	$in = "Insert into be (name) values ('beqav-$next')";
	$a = $deploy->query($in);
	echo "$next\n";
}

?>
