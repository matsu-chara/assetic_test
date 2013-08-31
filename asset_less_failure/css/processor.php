<?php
$cmd = "\"C:/xampp/php/php.exe\" process.php";

$status;
$stdout = "";
$pipes = array();

$descriptors = array(
	0 => array("pipe", "r"),	// stdin
	1 => array("pipe", "w"),	// stdout
	);
$process = proc_open($cmd, $descriptors, $pipes);
	
if (is_resource($process))
{
	fclose($pipes[0]);
	
	while (!feof($pipes[1]))
		$stdout .= fread($pipes[1], 1024);
	fclose($pipes[1]);
	
	$status = proc_close($process);
}

print_r(array(
	"status" => $status,
	"stdout" => $stdout,
));
?>
