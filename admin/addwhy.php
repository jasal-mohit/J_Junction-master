<html>

<head>
    <title> Add Why </title>
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
            <h1> Add Why</h1>
            <div class="heading">
                <form method="post" class="form">
                    <div class="row">
                        <div class="rleft"> Why Dmatics : </div>
                        <div class="r_right"> <input type="text" name="heading" class="input" placeholder="Heading"> </div>
                    </div>
                    <div class="row">
                        <div class="rleft"> Visibility : </div>
                        <div class="r_right">
                            <input type="radio" name="visible" class="" value="Hide" checked> Hide
                            <input type="radio" name="visible" class="" value="show"> Show
                        </div>
                    </div>
                    <div class="row">
                        <div class="rleft"></div>
                        <div class="r_right"> <input type="submit" name="submit" value="submit" class="button"> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>