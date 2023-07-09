<?php
include("config/connection.php");

// This block of code will execute if Update id have been given.
if (isset($_GET['uid'])) {
	$Uid = $_GET['uid'];
	$sql = "SELECT * FROM course WHERE Sno = '$Uid'";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);
	if (isset($_POST['submit'])) {
		$Title = $_POST['title'];
		$Fees = $_POST['fees'];
		$Duration = $_POST['duration'];
		$Eligibility = $_POST['eligibility'];
		$Department = $_POST['department'];
		$Description = $_POST['description'];
		$Visibility = $_POST['visibility'];
		$sqlupdate = "UPDATE course SET Title='$Title', Fees='$Fees', Duration='$Duration', Eligibility='$Eligibility', Department='$Department', Description='$Description', Visibility='$Visibility' WHERE Sno='$Uid'";
		$resultupdate = mysqli_query($connection, $sqlupdate);
		echo "<script>window.location='viewcourses.php'</script>";
	}
}
// This block of code will execute if admin want to insert a course.
else
if (isset($_POST['submit'])) {
	$Title = $_POST['title'];
	$Fees = $_POST['fees'];
	$Duration = $_POST['duration'];
	$Eligibility = $_POST['eligibility'];
	$Department = $_POST['department'];
	$Description = $_POST['description'];
	$Visibility = $_POST['visibility'];

	$sql = "insert into course(Title,Fees,Duration,Eligibility,Department,Description,Visibility) values('$Title','$Fees',	'$Duration','$Eligibility','$Department','$Description','$Visibility')";

	if (mysqli_query($connection, $sql))
		$msg = "Data inserted into DataBase Successfully";
	else
		$msg = die("Failed to insert Data into DataBase");
}
?>
<html>

<head>
	<title> Add Courses </title>
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
				<h1>Add Courses</h1>
				<div class="heading">
					<form method="post" class="form">
						<div class="row">
							<div class="rleft">
								Title :
							</div>
							<div class="r_right">
								<input type="text" name="title" class="input" value="<?php echo $row['Title'] ?>" placeholder="Title">
							</div>
						</div>

						<div class="row">
							<div class="rleft">
								Fees :
							</div>
							<div class="r_right">
								<input type="text" name="fees" class="input" value="<?php echo $row['Fees'] ?>" placeholder="Fees">
							</div>
						</div>

						<div class="row">
							<div class="rleft">
								Duration :
							</div>
							<div class="r_right">
								<input type="text" name="duration" class="input" value="<?php echo $row['Duration'] ?>" placeholder="Duration">
							</div>
						</div>

						<div class="row">
							<div class="rleft">
								Eigibility :
							</div>
							<div class="r_right">
								<input type="text" name="eligibility" class="input" value="<?php echo $row['Eligibility'] ?>" placeholder="Eligibility">
							</div>
						</div>

						<div class="row">
							<div class="rleft">
								Department :
							</div>
							<div class="r_right">
								<input type="text" name="department" class="input" value="<?php echo $row['Department'] ?>" placeholder="Department">
							</div>
						</div>

						<div class="row" style="height:100px;">
							<div class="rleft">
								Description :
							</div>
							<div class="r_right" style="height:100px">
								<textarea name="description" class="tarea" placeholder="Description"><?php echo $row['Description'] ?></textarea>
							</div>
						</div>

						<div class="row">
							<div class="rleft">
								Visibility :
							</div>
							<div class="r_right">
								<input type="radio" name="visibility" value="0" <?php if ($row['Visibility'] == 0)	echo "checked"; ?>>Hide
								<input type="radio" name="visibility" value="1" <?php if ($row['Visibility'] == 1)	echo "checked"; ?>>Show
							</div>
						</div>


						<div class="row">
							<div class="rleft"></div>
							<div class="r_right">
								<input type="submit" name="submit" value="Submit" class="button">
								<?php
								echo $msg;
								?>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>