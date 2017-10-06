<?php
	echo"<title>Codechef Charusat</title>";
	$t=mysqli_connect("localhost","id2295419_meet","Mypassword@1","id2295419_data");
	if(!$t){
		echo"Sorry Could Not Connect To Database";
	}
		echo"<meta name='viewport' content='width=device-width, initial-scale=1' />
		<head>
		<meta http-equiv='refresh' content='3;url=index.html' />
		<link rel='stylesheet' href='assets/css/main.css' />
		</head>";
		$n1 = $_POST["name"]; 
		$n2 = $_POST["contact"];
		$n3 = $_POST["email"];
		$n4 = $_POST["DOB"];
		$n5 = $_POST["message"];
		$n6 = $_POST["id"];
		$email_address = strip_tags(htmlspecialchars($_POST['email']));
		date_default_timezone_set('Asia/Kolkata');
		$datevalue = date(DATE_RSS);
		$ip = $_SERVER['REMOTE_ADDR'];
		$te="insert into data(name,contact,email,id,birthdate,message,submited_on,ip) values('$n1','$n2','$n3','$n6','$n4','$n5','$datevalue','$ip')";
		mysqli_query($t,$te);
				
		$to = $email_address;
		$email_subject = "Thank You For Registration, $n1";
		$email_body = "Dear $n1,\n\nYou have successfully registered for Codechef Charusat Chapter.\nThank You for registration, Furthur details will be shared to you on this email ID.\n\nRegards,\nTeam Codechef Charusat.";
		$headers = "From: info@codecharusat.tk\n";
		$headers .= "Reply-To: codecharusat@gmail.com";
		mail($to,$email_subject,$email_body,$headers);
		
		$to1 = 'codecharusat@gmail.com';
		$email_subject1 = "New Registration From :  $n6, $n1";
		$email_body1 = "You Have Got New Registration! \n\nDetails Are :\n\nName : $n1\nID No. : $n6\nContact No. : $n2\nEmail : $n3\nDate Of Birth : $n4\nProgramming Languages Known : $n5\n\nThank You,\nMeet Shah.";
		$headers1 = "From: info@codecharusat.tk\n";
		$headers1 .= "Reply-To: codecharusat@gmail.com";
		mail($to1,$email_subject1,$email_body1,$headers1);
		
		echo"<body class='contact'>

			<!-- Main -->
				<article id='main'>
						
					<header class='special container'>
						<span class='icon fa-thumbs-up '></span>
						<h2>Thank You !</h2>
					</header>
						</center>

				</article>


		</div>

		<!-- Scripts -->
			<script src='assets/js/jquery.min.js'></script>
			<script src='assets/js/jquery.dropotron.min.js'></script>
			<script src='assets/js/jquery.scrolly.min.js'></script>
			<script src='assets/js/jquery.scrollgress.min.js'></script>
			<script src='assets/js/skel.min.js'></script>
			<script src='assets/js/util.js'></script>
			<!--[if lte IE 8]><script src='assets/js/ie/respond.min.js'></script><![endif]-->
			<script src='assets/js/main.js'></script>

	</body>
</html>";
	
?>
	