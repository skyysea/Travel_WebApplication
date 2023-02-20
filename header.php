<?php
    session_start();
    unset($_SESSION['unfavorite']);

    if (isset($_GET['logout'])){
        // session_destroy();
        unset($_SESSION['username']);
        unset($_SESSION['unfavorite']);
    }
?>
<header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.php">
                        <span>
              Voya
            </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="menu.php">Restaurant</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="loca.php">Location</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <div class ="content">
                                <!-- Check login user -->
                                <?php  if(isset($_SESSION['username'])) : ?>
                                    <a href="profile01.php" class="user_link">
                                        <i class="fa fa-user" aria-hidden="true"><?php echo $_SESSION['username']; ?></i>
                                    </a>
                                <?php endif ?>

                            </div>
                            <?php  if(isset($_SESSION['username'])) : ?>
                                    <a href="?logout='1'" class="order_online">Log Out</a>
                            <?php endif ?>
                            <?php  if(!isset($_SESSION['username'])) : ?>
                                    <a href="login.php" class="order_online">Log In</a>
                            <?php endif ?>
                
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->