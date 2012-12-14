<?php

	$emailSubject = 'website contact';
	$webMaster = 'toggle@blueflame47.com';
	
	
	$nameField = $_post['name'];
	$emailField = $_post['email'];
	$phoneField = $_post['phone'];
	$howdid_0Field = $_post['howdid0'];
	$howdid_1Field = $_post['howdid1'];
	$howdid_2Field = $_post['howdid2'];
	$requestField = $_post['request'];
	
	$body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Phone: $phone <br>
howdid0: $howdid_0 <br>
howdid1: $howdid_1 <br>
howdid2: $howdid_2 <br>
request: $request <br>
EOD;


	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);
	

	$theResults = <<<EOD
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Form</title>
</head>

<body>
<div id="navbar">
			<ol>
				<li><a href="#logo">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="">Contact</a></li>
			</ol>
		</div>
<p> Thank you! we will get back to you shortly!</p>
</body>
</html>
EOD;
echo "$theResults";
	
?>