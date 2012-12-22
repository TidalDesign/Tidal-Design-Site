<?php

	$emailSubject = 'Quote Submission';
	$webMaster = 'connor@4sevenmedia.com';
	
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$source = $_POST['source'];
	$quote = $_POST['quote'];
	$auth = $_POST['auth'];
	$request = $_POST['request'];
	
	$body = <<<EOX
Name: 	$name <br>
		Email: $email <br>
		source: $source <br>
		quote: $quote <br>
		author: $auth <br>
		request: $request <br>
EOX;

$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);
	

	$theResults = <<<EOX
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
				<li><a href="http://tidaldesign.co/quoteboard">Back Home</a></li>
			</ol>
		</div>
<p style="margin-top: 50px;font-size: 2em; color: white; text-align:center; width: 400px; margin-left:35%; font-family: 'Fjalla One', sans-serif; background-color:grey; border-radius:15px;"> Thank you! hopefully your quote isn't stupid and it will make it on... the site... click the home thingy to go home</p>
<p style="font-size: 2em;"> 
</body>
</html>
EOX;
echo "$theResults";
	
?>