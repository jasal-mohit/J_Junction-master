<?php
$host = "localhost:3306";
$username = "root";
$password = "";
$db_name = "college_project";

$connection = mysqli_connect($host, $username, $password, $db_name);

if (!$connection)
	die("Connection Failed" . mysqli_connect_error($connection));

$sql = "SELECT * FROM course";
$result = mysqli_query($connection, $sql);

?>


<html>

<head>
	<title> View Course </title>
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
				<h1>View Courses</h1>
				<form method="post" class="for">
					<div class="viewrow">
						<div class="viewcol"> S.NO </div>
						<div class="viewcol w120"> Title </div>
						<div class="viewcol w120"> Fees </div>
						<div class="viewcol w120"> Duration </div>
						<div class="viewcol w210"> Description </div>
						<div class="viewcol w120"> Visible </div>
						<div class="viewcol action"> Action </div>
					</div>
					<?php
					while ($row = mysqli_fetch_assoc($result)) {
					?>
						<div class="viewrow">
							<div class="viewcol"> <?php echo $row['Sno']; ?> </div>
							<div class="viewcol w120"> <?php echo $row['Title']; ?> </div>
							<div class="viewcol w120"> <?php echo $row['Fees']; ?> </div>
							<div class="viewcol w120"> <?php echo $row['Duration']; ?> </div>
							<div class="viewcol w210"> <?php echo $row['Description']; ?> </div>
							<div class="viewcol w120"> <?php echo $row['Visibility']; ?> </div>
							<div class="viewcol action">
								<a href="addcourses.php?uid=<?php echo $row['Sno']; ?>">
									<div class="button"> Edit</div>
								</a>
								<a href="viewcourses.php">
									<div class="button"> Delete</div>
								</a>
							</div>
						</div>
					<?php
					}
					?>
				</form>
			</div>
		</div>
	</div>
</body>

</html>