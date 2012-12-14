<?php

	$emailSubject = 'website contact';
	$webMaster = 'toggle@blueflame47.com';
	
	
	$name = $_post['name'];
	$email = $_post['email'];
	$phone = $_post['phone'];
	$howdid_0 = $_post['howdid_0'];
	$howdid_1 = $_post['howdid_1'];
	$howdid_2 = $_post['howdid_2'];
	$request = $_post['request'];
	
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

<body style="background-color: #1c1c1c;">
<div id="navbar">
			<ol>
				<li><a href="http://tidaldesign.co">Home</a></li>
				<li><a href="http://tidaldesign.co/about">About</a></li>
				<li><a href="http://tidaldesign.co/contact">Contact</a></li>
			</ol>
		</div>
<p style="margin-top: 50px;font-size: 2em;"> Thank you! we will get back to you shortly!</p>
<p style="font-size: 2em;"> Click <a href="http://tidaldesign.co">Here</a> to go back!</p>
</body>
</html>
EOD;
echo "$theResults";
	
?>