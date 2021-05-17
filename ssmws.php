<head>
	<link rel="stylesheet" href="ssmws.css">
</head>

<?php
require __DIR__ . '/vendor/autoload.php';

$Parsedown = new Parsedown();

$filename = $_GET['md'].".md";
$test = file_exists($filename);

if($test == true) {
	
	$contents = file_get_contents($filename);
	echo $Parsedown->text($contents);
	
} else {
	
	http_response_code(404);
	die();
}


?>