<?php
include("config/connection.php");
$sql = 'SELECT * FROM home WHERE Sno = 1';
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $Title = $_POST['title'];
    $Description = $_POST['description'];
    $sqlupdate = "update home set title='$Title',description='$Description'";
    mysqli_query($connection, $sqlupdate);
    echo "<script>window.location='home.php'</script>";
}
?>


<html>

<head>
    <title>Home</title>
    <link href="css/style_admin.css" rel="stylesheet">
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
                <h1>Home</h1>
                <div class="heading">
                    <form method="post" class="form">
                        <div class="row">
                            <div class="rleft">
                                Title :
                            </div>
                            <div class="r_right">
                                <input type="text" name="title" class="input" value="<?php echo $row['Title']; ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="rleft">
                                Description :
                            </div>
                            <div class="r_right">
                                <textarea type="text" name="description" class="input"><?php echo $row['Description']; ?></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="rleft"></div>
                            <div class="r_right">
                                <input type="submit" name="submit" value="Update" class="button">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>