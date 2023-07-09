<html>

<head>
    <title> Contact Us </title>
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
                <h1>Change Password</h1>
                <div class="heading">
                    <form method="post" class="form">
                        <div class="row">
                            <div class="rleft"> Old Password : </div>
                            <div class="r_right"> <input type="password" name="op" class="input" placeholder="Old Password "> </div>
                        </div>
                        <div class="row">
                            <div class="rleft"> New Password : </div>
                            <div class="r_right"> <input type="password" name="np" class="input" placeholder="New Password "> </div>
                        </div>
                        <div class="row">
                            <div class="rleft"> Confirm Password : </div>
                            <div class="r_right"> <input type="password" name="cp" class="input" placeholder="Confirm Password "> </div>
                        </div>
                        <div class="row">
                            <div class="rleft"></div>
                            <div class="r_right"> <input type="submit" name="submit" value="Update" class="button"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>