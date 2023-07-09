<html>

<head>
	<title> Aboutus </title>
	<link href="css/style_admin.css" rel="stylesheet" />
</head>

<body>
	<div class="outer">
		<?php
		include("header.php");
		?>
		<div class="main">
			<div class="mleft">
				<?php
				include("menubar.php");
				?>
			</div>
			<div class="mright">
				<h1> Aboutus</h1>
				<div class="heading">
					<form method="post" class="form">
						<div class="row">
							<div class="rleft"> Title : </div>
							<div class="r_right"> <input type="text" name="title" class="input" placeholder="Heading"> </div>
						</div>
						<div class="row" style="height:100px;">
							<div class="rleft"> News Description : </div>
							<div class="r_right" style="height:100px"> <textarea name="description" class="tarea"></textarea> </div>
						</div>
						<div class="row">
							<div class="rleft"> Visibility : </div>
							<div class="r_right">
								<input name="visible" type="radio" value="Hide" checked> Hide
								<input name="visible" type="radio" value="show"> Show
							</div>
						</div>
						<div class="row">
							<div class="rleft"></div>
							<div class="r_right"> <input type="submit" name="submit" value="Submit" class="submitbtn"> </div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>