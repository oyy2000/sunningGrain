<?php
include('session.php');

if(!$login_session){
    header("location:login.php");
}
?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/move-top.js"></script>
    <script src ="js/easing.js"></script>
    <!--Animation-->
    <script src="js/wow.min.js"></script>
<!--   <script typet="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>-->
    <link href="css/animate.css" rel='stylesheet' type='text/css' />
    <script>
        new WOW().init();
    </script>
    <!---/End-Animation---->

    <style type="text/css">
        mark {
            background:greenyellow;
        }
    </style>
</head>
<body>

<div class="header head-top " id="home" style="background: url('images/blog.jpg');background-size: cover ">
    <div class="container">
        <div class="header-top clearfix" >
            <div class="top-menu">
                <span class="menu"><img src="images/nav.png" alt=""/> </span>
                <ul>
                    <li><a href="index.html" >Home</a></li><label>/</label>
                    <li><a href="about.html">About</a></li><label>/</label>
                    <li><a href="products.php" class="active">Products</a></li><label>/</label>
                    <li><a href="contact.html">Contact</a></li><label>/</label>
                    <li><a href="login.php">Login</a></li><label>/</label>
                    <li><a href="register.php">Register</a></li><label>/</label>
                    <li> <a style="color: orange;font-family: 'Comic Sans MS'"><?php echo "Welcome ".$login_session   ?></a> </li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
                <!-- script for menu -->
                <script>
                    $("span.menu").click(function(){
                        $(".top-menu ul").slideToggle("slow" , function(){
                        });
                    });
                </script>
                <!-- //script for menu -->

            </div>
            <div class="search">
                <form>
                    <input type="text" id="searchvalue"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                    <input type="submit" value ="">
                </form>
                <script>
                    $(function() {
                        $("#searchvalue").on("input.highlight", function() {
                            // Determine specified search term
                            var searchTerm = $(this).val();
                            // Highlight search term inside a specific context
                            $("#context").unmark().mark(searchTerm);
                        });
                    });
                </script>

            </div>

        </div>
        <div class="logo wow bounceInLeft animated" data-wow-delay="0.4s" >
            <a href="index.html">SunnyGrain</a>
        </div>

    </div><!--container-->
</div><!--header-->


<style>
    .panel:hover{
        background-color: lightyellow;
        box-shadow: 3px 5px 3px 3px lightcoral;
    }
    .panel-heading:hover{
        background:lightgreen;
        cursor: pointer;
    }
    .revbut{
        background:#ffb449;
        border-radius: 10px;
        padding: 3px;
        border: 1px coral dashed;
        margin-left: 5px;
        float: right;
    }
    .revbut:hover{
        background: yellow;
    }
    .reviewinput{
        border: 1px solid coral;
        padding: 7px 0px;
        border-radius: 3px;
        padding-left:5px;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        width: 70%;
    }
    .reviewinput:focus{
        border-color: lightgreen;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
    }
</style>

<div class="container"  id="context">
    <div class="project-section wow zoomInDown animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
        <div class="container">
            <h3 >Products</h3>
            <div class="port-grids">
                <div class="port1">
                    <div class="col-md-4 port-grid">
                        <form action="addaction.php" method="post">
                            <div class="panel panel-success bounceInUp wow" data-wow-delay="0.6s" align="center">
                                <div class="panel-heading" style="max-height: 60px">
                                    <h3 class="panel-title">Pea</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="images/pea1.jpg" class="img-responsive" alt=""align="center" />
                                </div>
                                <div class="well" align="left" style="word-break: break-all" >
                                    <?php
                                    $link = new mysqli('localhost','root','','abc_company') ;
                                    $sql = "select * from products where name='Pea'";
                                    $result = $link->query($sql);


                                    $rownum = $result->num_rows;

                                    for($i = 0;$i<$rownum;$i++){

                                        $row = mysqli_fetch_assoc($result);
                                        $review = $row['review'];
                                        $review = stripslashes(trim($row['review']));
                                        $review = $link->real_escape_string($row['review']);

                                        echo "<label>".$row['username']." : ".$row['review'];
                                        if($row['username'] == $login_session)
                                            echo "
                                            <form action='delete.php' method='post'>
                                            <input type='text' value='{$row['username']}' name='username2' style='display: none'>
                                            <input type='text' value='{$row['name']}' name='name2'style='display: none'>
                                            <input type='text' value='{$row['review']}' name='review2'style='display: none'>
                                            <input type='submit' onclick='del()' formaction='delete.php' formmethod='post' class='revbut' value='delete'>
                                            </form>
                                                
                                                </label>
                                                <br>
                                                ";

                                        else echo "</label><br>";
                                    }


                                    ?>
                                    <input type="text" name="review" class="reviewinput">
                                    <input name="name" style="display: none"  value="Pea" >
                                    <input type="submit" name="send" class="revbut" value="review">


                                    <script type="text/javascript" rel="script">
                                        function del () {
                                            if (confirm("Are you sure to delete this？")){
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4 port-grid">
                        <form action="addaction.php" method="post">
                            <div class="panel panel-warning bounceInDown wow" data-wow-delay="0.6s" align="center">
                                <div class="panel-heading" style="max-height: 60px">
                                    <h3 class="panel-title">Potato</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="images/potato.jpg" class="img-responsive" alt=""align="center" />
                                </div>
                                <div class="well" align="left">
                                    <?php
                                    $link = new mysqli('localhost','root','','abc_company') ;
                                    $sql = "select * from products where name='Potato'";
                                    $result = $link->query($sql);
                                    $rownum = $result->num_rows;
                                    for($i = 0;$i<$rownum;$i++){

                                        $row = mysqli_fetch_assoc($result);
                                        $review = $row['review'];
                                        $review = stripslashes(trim($row['review']));
                                        $review = $link->real_escape_string($row['review']);

                                        echo "<label>".$row['username']." : ".$row['review'];
                                        if($row['username'] == $login_session)
                                            echo "
                                            <form action='delete.php' method='post'>
                                            <input type='text' value='{$row['username']}' name='username2' style='display: none'>
                                            <input type='text' value='{$row['name']}' name='name2'style='display: none'>
                                            <input type='text' value='{$row['review']}' name='review2'style='display: none'>
                                            <input type='submit' onclick='del()' formaction='delete.php' formmethod='post' class='revbut' value='delete'>
                                            </form>                 
                                            </label> <br>
                                                ";
                                        else echo "</label><br>";
                                    }
                                    ?>
<!--                                    I've tried this company's pea, my child says that they tastes very fresh and tasty.And I must try other agriculture products here.
-->                                 <input type="text" name="review" class="reviewinput">
                                    <input name="name" style="display: none"  value="Potato" >
                                    <input type="submit" name="send" class="revbut" value="review">
                                </div>
                            </div>
                        </form>
                    </div>




                    <div class="col-md-4 port-grid">
                        <form action="addaction.php" method="post">
                            <div class="panel panel-info bounceInUp wow" data-wow-delay="0.6s" align="center">
                                <div class="panel-heading" style="max-height: 60px">
                                    <h3 class="panel-title">Oak</h3>
                                </div>
                                <div class="panel-body">
                                    <img src="images/bowl-cinnamon.jpg" class="img-responsive" alt=""align="center" />
                                </div>
                                <div class="well" align="left">
                                    <?php
                                    $link = new mysqli('localhost','root','','abc_company') ;
                                    $sql = "select * from products where name='Oak'";
                                    $result = $link->query($sql);
                                    $rownum = $result->num_rows;
                                    for($i = 0;$i<$rownum;$i++){

                                        $row = mysqli_fetch_assoc($result);
                                        $review = $row['review'];
                                        $review = stripslashes(trim($row['review']));
                                        $review = $link->real_escape_string($row['review']);

                                        echo "<label>".$row['username']." : ".$row['review'];
                                        if($row['username'] == $login_session)
                                            echo "
                                            <form action='delete.php' method='post'>
                                            <input type='text' value='{$row['username']}' name='username2' style='display: none'>
                                            <input type='text' value='{$row['name']}' name='name2'style='display: none'>
                                            <input type='text' value='{$row['review']}' name='review2'style='display: none'>
                                            <input type='submit' onclick='del()' formaction='delete.php' formmethod='post' class='revbut' value='delete'>
                                            </form>
                                                
                                                </label>
                                                <br>
                                                ";

                                        else echo "</label><br>";
                                    }
                                    ?>

                                    <input type="text" name="review" class="reviewinput">
                                    <input name="name" style="display: none"  value="Oak" >
                                    <input type="submit" name="send" class="revbut" value="review">
                                </div>
                            </div>
                        </form>
                    </div>



                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div><!--main content-->


<div class="categories-section">
    <div class="container">


        <div class="col-md-8 contact-map  wow bounceIn animated " data-wow-delay="0.4s">
            <iframe src="map.html"> </iframe>
        </div>


        <div class="col-md-4 cont wow bounceInRight animated" data-wow-delay="0.4s" >
            <a href="contact.html"style="text-decoration: none;"><h3>Contact</h3></a>
            <ul>
                <li><i class="phone"></i></li>
                <li><p>133-444-53508</p>
                    <p>028-8170-5350</p></li>
            </ul>
            <ul>
                <li><i class="smartphone"></i></li>
                <li><p>Nanhai Avenue</p>
                    <p>Shenzhen University</p></li>
            </ul>
            <ul>
                <li><i class="message"></i></li>
                <li><a href="#">888222555@qq.com</a>
                    <a href="#">oyy200000@163.com</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>



<div class="footer-section">
    <div class="container">
        <div class="footer-top">
            <div class="social-icons  bounceInLeft wow animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                <a href="#"><i class="icon1"></i></a>
                <a href="#"><i class="icon2"></i></a>
                <a href="#"><i class="icon3"></i></a>
                <a href="#"><i class="icon4"></i></a>
            </div>
        </div>


        <div class="fadeInDown wow animated" data-wow-delay="0.4s">
            <div class="bottom-menu">
                <ul>
                    <li><a href="index.html" >Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="products.php" class="active">Products</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div><!--Bottom Menu-->
        </div>
        <div class="footer-bottom wow bounceInRight animated" data-wow-delay="0.4s" >
            <p>Copyright &copy; 2019.SunnyGrain All rights reserved.</p>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $().UItoTop({ easingType: 'easeOutQuart' });
            });
        </script>

        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" > </span></a> <!--TO top-->
        <script>$('body,html').animate({scrollTop:0},500);</script>
        <!--	make page move slowly -->





    </div>
</div>

</body>
</html>