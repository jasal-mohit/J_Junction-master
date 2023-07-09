<?php
include("config/connection.php");
$sql = "SELECT * FROM gallery";
$result = mysqli_query($connection, $sql);
?>


<html>

<head>
	<title> View Gallery </title>
	<link href="css/style_admin.css" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
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
			<h1> View Gallery </h1>
			<form method="post">
				<div class="viewrow">
					<div class="viewcol">
						<heading> S.NO </heading>
					</div>
					<div class="viewcol"> <input type="submit" name="deleteall" value="Delete" class="del"></div>
					<div class="viewcol w210">
						<heading> Title </heading>
					</div>
					<div class="viewcol w283">
						<heading> Image </heading>
					</div>
					<div class="viewcol w120">
						<heading> Visible </heading>
					</div>
					<div class="viewcol action">
						<heading> Action </heading>
					</div>
					</heading>
				</div>
				<?php while ($row = mysqli_fetch_array($result)) { ?>
					<div class="viewrow">
						<div class="viewcol del">
							<?php echo $row['Sno']; ?>
						</div>
						<div class="viewcol">
							<input type="checkbox">
						</div>
						<div class="viewcol w210">
							<?php echo $row['Image']; ?>
						</div>
						<div class="viewcol w283">
							<img src="Images/<?php echo $row['Image']; ?>" alt="Image" height="100%" width="100%">
						</div>
						<div class="viewcol w120">
							<?php echo $row['Visibility']; ?>
						</div>
						<div class="viewcol action">
							<div class="editbtn"><b class="fa fa-pencil"></b> Edit</div>
							<div class="delbtn"><b class="fa fa-trash"></b> Delete</div>
						</div>
					</div>
				<?php } ?>
			</form>
		</div>
	</div>
</body>

</html>