<html>
<head>
<title>this is a test app</title>
</head>
<body>
<?php

$appID=$_GET['opensocial_app_id'];
echo "Hello, This is my first app! (App ID: $appID)<br/>";
$event=$_GET[eventtype];
if (strcmp($_GET['eventtype'],'event.resumeapp') == 0){
	$userid=$_GET['id'];
	echo "<strong>Your ID:</strong> $userid";
}

?>
</body>
</html>
