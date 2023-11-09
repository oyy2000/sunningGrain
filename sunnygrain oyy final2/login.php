<?php
include('loginserver.php'); // Includes Login Script
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tpmo_418_pack/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="tpmo_418_pack/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="tpmo_418_pack/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="tpmo_418_pack/css/templatemo_style.css" rel="stylesheet" type="text/css">
    <link href="css/loginandlogon.css"rel="stylesheet" type="text/css">
    <script type='text/javascript' src='tpmo_418_pack/js/jquery-1.11.1.min.js'></script>
    <script type='text/javascript' src='tpmo_418_pack/js/jquery.particleground.min.js'></script>
    <script type='text/javascript' src='tpmo_418_pack/js/demo.js'></script>
</head>
<style>


</style>
<body >
<div id="particles">
    <div class="intro">
        <div class="container">
            <div class="col-md-12">
                <h1 class="margin-bottom-15" style="color: green;">Login</h1>
                <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="#" method="post">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="control-wrapper">
                                <label for="username" class="control-label fa-label" style="color: #0f0f0f"><i class="fa fa-user fa-medium"></i></label>
                                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="control-wrapper">
                                <label for="password" class="control-label fa-label" style="color: #0f0f0f"><i class="fa fa-lock fa-medium"></i></label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="control-wrapper">
                                <label for="captcha" class="control-label fa-label" style="color: #0f0f0f"><i class="fa fa-lock fa-medium"></i></label>
                                <input type="text" class="form-control" id="captcha" placeholder="Captch" name="captcha" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <div class="control-wrapper">
                                <img id="captcha_img" border="1" src="./Verification.php?r=<?php echo rand();?>" alt="" width="100" height="30">
                            </div>
                        </div>
                        <div class="col-md-4" style="text-decoration: underline">
                            <a><div id="change" onclick="changing()" >Another?</div></a>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div  style="margin: 0px;color: orange; font-size: 10px">
                                <?php foreach ($errors as $error) { ?>
                                    <p style="font-size: 1.2vw"><?php echo $error ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <input type="submit" value="Log in" class="btn btn-success" onclick="check()" style="float: left" name="submit">
                            </div>
                            <div class="col-md-6">
                                <input type="button" value="Back" class="btn btn-info" onclick="back()" >
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label style="color: #0f0f0f" class="templatemo-create-new" >Login with: </label>
                            <div class="inline-block">
                                <a href="#"><i class="fa fa-facebook-square login-with"></i></a>
                                <a href="#"><i class="fa fa-twitter-square login-with"></i></a>
                                <a href="#"><i class="fa fa-google-plus-square login-with"></i></a>
                                <a href="#"><i class="fa fa-tumblr-square login-with"></i></a>
                                <a href="#"><i class="fa fa-github-square login-with"></i></a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <a href="register.php" class="templatemo-create-new" style="color:#0f0f0f;">Create new account <i class="fa fa-arrow-circle-o-right"></i></a>

                </div>
            </div>
        </div>
    </div>



</div>
<script >
    function back() {
        window.location = "index.html";
    }
    function changing(){
        document.getElementById('captcha_img').src="./Verification.php?"+Math.random();
    }
</script>


</body>
</html>

