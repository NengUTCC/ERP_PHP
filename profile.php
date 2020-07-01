<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html class="menu">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="google" value="notranslate"/>
    <title>ERP-Profile</title>
    <link rel="stylesheet" type="text/css" href="style/profile.css">
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body>



<nav class="main-menu">
    <div class="headbar">
    <!--<a class="logo" href="#">ERP</a>--> 
    <p><b>ERP</b></p>
    </div>

    <div class="settings"></div>    
    <div class="scrollbar" id="style-1">
    <ul>
        <li>                                   
            <a href="index.php">
            <i class="fa fa-home fa-lg"></i>
            <span class="nav-text">Home</span>
            </a>
        </li>   
   
        <li>                                 
            <a href="profile.php">
            <i class="fa fa-user fa-lg"></i>
            <span class="nav-text">Profile</span>
            </a>
        </li>   

        <li>                                 
            <a href="https://chawakorn-neng.web.app/">
            <i class="fa fa-envelope-o fa-lg"></i>
            <span class="nav-text">Contact</span>
            </a>
        </li>   

<!--

        <li>
            <a href="#">
            <i class="fa fa-heart-o fa-lg"></i>
            
        <span class="share"> 
        <div class="addthis_default_style addthis_32x32_style">
        <div style="position:absolute;margin-left: 56px;top:3px;"> 
        <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/facebook-icon.png" width="30px" height="30px"></a>
        <a href="https://twitter.com/share" target="_blank" class="share-popup"><img src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/512/Twitter_alt.png" width="30px" height="30px"></a>
        <a href="https://plusone.google.com/_/+1/confirm?hl=en&url=_URL_&title=_TITLE_" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/google-plus-icon.png" width="30px" height="30px"></a>   
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ff17589278d8b3a"></script>
        </span>

        <span class="twitter"></span>
        <span class="google"></span>
        <span class="fb-like">
        <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Fstartific&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
        </span>
        <span class="nav-text"></span>
        </a>

        </li>

-->              
  
        </li>
            <li class="darkerlishadow">
            <a href="#">
            <i class="fa fa-clock-o fa-lg"></i>
            <span class="nav-text">News</span>
            </a>
        </li>
  
        <li class="darkerli">
            <a href="#">
            <i class="fa fa-desktop fa-lg"></i>
            <span class="nav-text">Technology</span>
            </a>
        </li>
        
        <li class="darkerli">
            <a href="#">
            <i class="fa fa-plane fa-lg"></i>
            <span class="nav-text">Travel</span>
            </a>
        </li>
        
        <li class="darkerli">
            <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span class="nav-text">Shopping</span>
            </a>
        </li>
        
        <li class="darkerli">
            <a href="#">
            <i class="fa fa-microphone fa-lg"></i>
            <span class="nav-text">Film & Music</span>
            </a>
        </li>

        <li class="darkerli">
            <a href="#">
            <i class="fa fa-flask fa-lg"></i>
            <span class="nav-text">Web Tools</span>
            </a>
        </li>
        
        <li class="darkerli">
            <a href="#">
            <i class="fa fa-picture-o fa-lg"></i>
            <span class="nav-text">Art & Design</span>
            </a>
        </li>

        <li class="darkerli">
            <a href="#">
            <i class="fa fa-align-left fa-lg"></i>
            <span class="nav-text">Magazines
            </span>
            </a>
        </li>
        
        <li class="darkerli">
            <a href="#">
            <i class="fa fa-gamepad fa-lg"></i>
            <span class="nav-text">Games</span>
            </a>
        </li>
        
        <li class="darkerli">
            <a href="#">
            <i class="fa fa-glass fa-lg"></i>
            <span class="nav-text">Life & Style
            </span>
            </a>
        </li>
        
        <li class="darkerlishadowdown">
            <a href="#">
            <i class="fa fa-rocket fa-lg"></i>
            <span class="nav-text">Fun</span>
            </a>
        </li>

    </ul>

<!--        
        <li>                                
            <a href="#">
            <i class="fa fa-question-circle fa-lg"></i>
            <span class="nav-text">Help</span>
            </a>
        </li>   
    
-->

    <ul class="logout">

        <li>                                 
            <a href="index.php?logout='1'">
            <i class="fa fa-sign-out"></i>
            <span class="nav-text"><strong><?php echo $_SESSION['username']; ?></strong> Logout</span>
            </a>
        </li>   

    <!--
        <li>
        <a href="#">
        <i class="fa fa-lightbulb-o fa-lg"></i>
        <span class="nav-text">
        BLOG 
        </span> 
        </a>
        </li>
    -->
    </ul>

</nav>



    <div class="popup">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h2>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h2>
            </div>
        <?php endif ?>

        </br>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <!--<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>-->
            <!--<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>-->
        <?php endif ?>
        </div>

    <div class="header">
        <div class="card">
        <h2>Profile</h2>
        </div>
    </div>
    <p class="detail"><b>Detail</b></p>
    
    <div class="container">
    <?php
    //Import
    include('db\server.php');
    //Decode
    mysqli_set_charset($conn,'utf8');
    // Query
    $username = $_SESSION['username'];
    $query = "SELECT * FROM user where username = '$username'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($result);
    //if ($result) {
    //    while ($row = mysqli_fetch_array($result)) {
    //        echo "id : ".$row['id']."<br>";
    //        echo "username : ".$row['username']."<br>";
    //        echo "password : ".$row['password']."<br>";
    //        echo "email : ".$row['email']."<br>";
    //    }
    //    mysqli_free_result($result);        
    //}
    //else {
    //    echo "ไม่สามารถแสดงข้อมูลได้";
    //}
    //mysqli_close($conn);
    ?>
    <div class="formdisplay">
    <br>
    <label>ID</label><br>
    <input name="id" type="text" id="id" value="<?php echo $data['id'] ?>" readonly><br>
    <br>
    <label>Username</label><br>
    <input name="username" type="text" id="username" value="<?php echo $data['username'] ?>" ><br>
    <br>
    <label>Password</label><br>
    <input name="password" type="password" id="password" value="<?php echo $data['password'] ?>" ><br>
    <br>
    <label>E-mail</label><br>
    <input name="email" type="text" id="email" value="<?php echo $data['email'] ?>" ><br>
    <br>
    <button type="button" class="updatebutton">Update</button>
    </div>
    </div>

    <footer>
    <!--Waves Container-->
    <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
    </svg>
    </div>
    <!--Waves end-->
    </footer>
</body>
</html>