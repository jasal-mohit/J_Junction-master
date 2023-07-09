<html>

<head>
	<title> View Gallery </title>
	<link href="css/style_admin.css" rel="stylesheet" />
</head>

<body>
	<div class="outer">
		<?php include("header.php"); ?>
		<div class="main">
			<div class="mleft">
				<?php
				include("menubar.php");
				?>
			</div>
			<div class="mright">
				<h1> Enquiry </h1>
				<form method="post">
					<div class="viewrow">
						<div class="viewcol">
							<heading> S.No. </heading>
						</div>
						<div class="viewcol"> <input type="submit" name="deleteall" value="Delete" class="del"></div>
						<div class="viewcol w210">
							<heading> Name </heading>
						</div>
						<div class="viewcol w120">
							<heading> Phone </heading>
						</div>
						<div class="viewcol w210">
							<heading> Email </heading>
						</div>
						<div class="viewcol w310">
							<heading> Enquiry </heading>
						</div>
					</div>

					<div class="viewrow">
						<div class="viewcol"> 1</div>
						<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
						<div class="viewcol w210"> Aryan</div>
						<div class="viewcol w120"> 9876543210</div>
						<div class="viewcol w210"> aryan@gmail.com</div>
						<div class="viewcol w310"> about C Programming Language</div>
					</div>
					<div class="viewrow">
						<div class="viewcol"> 1</div>
						<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
						<div class="viewcol w210"> Aryan</div>
						<div class="viewcol w120"> 9876543210</div>
						<div class="viewcol w210"> aryan@gmail.com</div>
						<div class="viewcol w310"> about C Programming Language</div>
					</div>
					<div class="viewrow">
						<div class="viewcol"> 1</div>
						<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
						<div class="viewcol w210"> Aryan</div>
						<div class="viewcol w120"> 9876543210</div>
						<div class="viewcol w210"> aryan@gmail.com</div>
						<div class="viewcol w310"> about C Programming Language</div>
					</div>
					<div class="viewrow">
						<div class="viewcol"> 1</div>
						<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
						<div class="viewcol w210"> Aryan</div>
						<div class="viewcol w120"> 9876543210</div>
						<div class="viewcol w210"> aryan@gmail.com</div>
						<div class="viewcol w310"> about C Programming Language</div>
					</div>
					<div class="viewrow">
						<div class="viewcol"> 1</div>
						<div class="viewcol"> <input type="checkbox" name="chk" value=""></div>
						<div class="viewcol w210"> Aryan</div>
						<div class="viewcol w120"> 9876543210</div>
						<div class="viewcol w210"> aryan@gmail.com</div>
						<div class="viewcol w310"> about C Programming Language</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>