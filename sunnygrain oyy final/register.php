<?php
include ('server.php');
?>
<!DOCTYPE html>
<head>
    <title>Create Account</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
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
    <script type='text/javascript' src='tpmo_418_pack/js/bootstrap.min.js'></script>

</head>
<body class="templatemo-bg-gray" >
<div id="particles">
    <div class="intro" align="center">
        <h1 class="margin-bottom-15" >Create Account</h1>
        <div class="container" align="center">
            <div class="col-md-12" align="center">
                <form class="form-horizontal templatemo-create-account templatemo-container "  action="register.php" method="post"
                style="max-width: 600px">
                    <div class="form-inner" align="center">

                        <div class="form-group">
                            <div class="col-md-12" align="center">
                                <label  class="control-label" style="color: black;float: left" >Username</label>
                                <input type="text" class="form-control" id="username"  name="username">
                            </div>


                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="username" class="control-label" style="color: black;float: left">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="password" class="control-label" style="color: black;float: left">Password</label>
                                <input type="password" class="form-control"  placeholder="" name="password_1"id="pwd" >
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="password" class="control-label" style="color: black;float: left">Confirm Password</label>
                                <input type="password" class="form-control"  placeholder="" name="password_2" onkeyup="check()" id="pwd1">
                            </div>
                            <div id="tishi" align="center" style="font-size: 14px;font-family: 'Comic Sans MS'">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label style="color: black;"><input type="checkbox" >I agree to the <a href="#" data-toggle="modal" data-target="#templatemo_modal">Terms of Service</a> and Privacy Policy.</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <input type="submit" value="Create account" class="btn btn-info" name="reg_user" >
                            </div>
                            <div class="col-md-2">
                                <input type="button" value="Back" class="btn btn-info" onclick="back()" >
                            </div>
                        </div>
                    </div>

                    <div style="margin: 0px;color: orange;">
                        <?php foreach ($errors as $error) { ?>
                            <p style="font-size: 1.2vw"><?php echo $error ?></p>
                        <?php } ?>
                    </div>


                </form>
                <div style="margin: 20px;color: blue;font-size: 1.2vw" >
                    Already a member? <a href="login.php" style="color: lightcoral">Sign in</a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="templatemo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="color: black">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Terms of Service</h4>
                    </div>
                    <div class="modal-body" style="color: black" align="left">

                        <p>Thank you for using SunnyGrain!</p>
                        <p> We're happy you're here. Please read this Terms of Service agreement
                         carefully before accessing or using SunnyGrain. Because it is such an important contract between us and our users,
                          we have tried to make it as clear as possible. For your convenience, we have presented
                         these terms in a short non-binding summary followed by the full legal terms.</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="color: black">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function back() {
        window.location = "index.html";
    }
    function check(){

        var pwd = $("#pwd").val();
        var pwd1 = $("#pwd1").val();
        if(pwd == pwd1)
        {
            $("#tishi").html("Confirm Password is the same to password");
            $("#tishi").css("color","green");

        }
        else {
            $("#tishi").html("Confirm Password is not the same to password");
            $("#tishi").css("color","red");
        }
    }

</script>
</body>

