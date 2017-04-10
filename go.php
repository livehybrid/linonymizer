<?php

$url=$_GET['url'];
unset($_GET['url']);
foreach ($_GET as $key=>$val) {
	$url .= "&".$key."=".$val;
}


?>
<html>
<head>
<META http-equiv="refresh" content="0;URL=<?php echo $url; ?>">
</head>
<body>
<center> You Are being redirected to <?php echo $url; ?> </center>

</body>
