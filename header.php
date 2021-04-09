 <section class="menu cid-rF5O8BcREn" once="menu" id="menu1-8">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="">
                         <img src="assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html">
                        </a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="event.php"><span class="mbri-map-pin mbr-iconfont mbr-iconfont-btn"></span>
                        Events</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="gallery.php"><span class="mbri-image-slider mbr-iconfont mbr-iconfont-btn"></span>
                        Gallery</a></li>

                <?php

                    if(!isset($_SESSION)) 
                    { 
                        session_start(); 
                    } 

                if(isset($_SESSION["sid"])){
                ?>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="profile.php"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        
                       <i>Hello, </i>  <?php echo $_SESSION["uid"];?>
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link link text-white display-4" href="logout.php"><span class="mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>Logout</a></li></ul>
                <?php
                session_write_close();
                }
                else{
                    ?>
                    <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="login.php"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Login/ Signup
                    </a>
                </li>
                    <?php
                }
                ?>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="ticket.php"><span class="mbri-cart-add mbr-iconfont mbr-iconfont-btn"></span>
                    Buy Ticket</a></div>

        </div>
    </nav>
</section>