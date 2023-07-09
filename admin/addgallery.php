<?php
    include("config/connection.php");
    if(isset($_POST['submit']))
    {
        $Filename=$_FILES['Image']['name'];
        $Tmpname=$_FILES['Image']['tmp_name'];
        $Visibility=$_POST['Visibility'];        
        $Folder="Images/".$Filename;
        move_uploaded_file($Tmpname, $Folder);

        $sql="INSERT INTO gallery (Image,Visibility) VALUES ('$Filename','$Visibility')";
        $result=mysqli_query($connection,$sql);
        if($result){
            $msg="Images Added to Database";
        }
        else
            $msg="Unable to insert Image to DataBase";
    }
?>

<html>
    <head>
        <title> Add Gallery </title>
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
                <h1>Add Gallery</h1>
                <div class="heading">
                    <form class="form" method="post" enctype="multipart/form-data">
                        <div class="row" >
                            <div class="rleft">
                                Image :
                            </div>
                            <div class="r_right">
                                <input type="file" name="Image" class="input">
                            </div>
                        </div>
                        <div class="row" >
                            <div class="rleft">
                                Visibility :
                            </div>
                            <div class="r_right">
                                <input type="radio" name="Visibility" value="0" checked> Hide
                                <input type="radio" name="Visibility" value="1"> Show
                            </div>
                        </div>
                        <div class="row">
                            <div class="r_right">
                                <input type="submit" name="submit" value="Submit" class="button">
                                <?php echo $msg; ?>
                            </div>
                            <div class="rleft"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>