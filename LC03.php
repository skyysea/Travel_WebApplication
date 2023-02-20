<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/Headic.png" type="">

    <title> Voya </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

        

    <!-- <link rel="stylesheet" type="text/css" href="https://demo.plantpot.works/assets/css/normalize.css">
    <link rel="stylesheet" href="https://use.typekit.net/opg3wle.css">
    <link rel="stylesheet" type="text/css" href="detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    /> -->

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <script src="js/comments.js"></script>

</head>

<body class="sub_page">
    <div class="hero_area">
        <div class="bg-box">
            <img src="images/hero-bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <?php include_once 'header.php'; ?>
        <?php
        $page_id = 6;
        $_SESSION['page_id'] = $page_id;?>
        <?php
            include('server.php');

            if (isset($_SESSION['username'])){
                $username = $_SESSION['username'];
                $page_id = 6;
                $user_check_query = "SELECT * FROM `favorite` WHERE username = '$username' AND page_id = '$page_id'";
                $query = mysqli_query($conn, $user_check_query);
                $result = mysqli_fetch_assoc($query);
                if ($result) {
                    $_SESSION['unfavorite'] = $page_id;
                }
            }
        ?>
        <!-- end header section -->
    </div>

    <!-- food section -->

    <section class="about_section layout_padding">
        <div class="container">

            <div class="row">   
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/L03.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                            Wat Phasuk Maneejak
                            </h2>
                        </div>
                        <p>
                        Wat Phasuk Maneechak It was built on October 26, 1977 by Mr. Phasuk and Nang Ngek Maneekak donated land and initiated the construction of the Senasana building. for the community to have a temple near the house convenient for performing religious ceremonies Let's establish an official temple using the name "Wat Phasuk Manee Chak" in honor of the land donor and the temple's initiator which have been used until now.

                        </p>
                        <a href="https://www.chapanakij.com/temple_detail/240">
                            Read More
                        </a>
                        <?php  if(isset($_SESSION['username'])) : ?>
                            <?php  if(!isset($_SESSION['unfavorite'])) : ?>
                            <form action="favorite_db.php" method="post">
                                <input type="hidden" name="page_id" id="page_id" value="6">
                                <input type="hidden" name="img_id" id="img_id" value="images/L03.png">
                                <input type="hidden" name="name" id="name" value="Wat Phasuk Maneejak">
                                <input type="hidden" name="link" id="link" value="LC03.php">
                                <a><input type="submit" name="submit" id="submit" class="btn" value="Favorite"></a>
                            </form>
                            <?php endif ?>
                            <?php  if(isset($_SESSION['unfavorite'])) : ?>
                            <form action="favorite_db.php" method="post">
                                <input type="hidden" name="page_dele" id="page_dele" value="6">
                                <a><input type="submit" name="submit" id="submit" class="btn" value="Unfavorite"></a>
                            </form>
                            <?php endif ?>
                        <?php endif ?>
                        <?php  if(!isset($_SESSION['username'])) : ?>
                            <p>Login to Add Favorite</p>    
                        <?php endif ?>

                        <!-- <form action="favorite_db.php" method="post">
                            <input type="hidden" name="page_id" id="page_id" value="1">
                            <a><input type="submit" class="btn" value="Favorite"></a>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end detail section -->

    <section class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Datails
                        </h4>
                        <div class="contact_link_box">
                            <a>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                WG6R+Q96 Popular Road, Ban Mai Subdistrict, Pak Kret District, Nonthaburi 11120
              </span>
                            </a><a> </a><a> </a><a> </a><a> </a><a>
                            </a>
                            <a>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                Call 02 503 3411
              </span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a class="footer-logo">
                        Opening Hours
                        </a>
                        <p>Saturday 5.00 -21.30</p>
                        <p>Sunday 5.00 -21.30</p>
                        <p>Monday 5.00 -21.30</p>
                        <p>Tuesday 5.00 -21.30</p>
                        <p>Wednesday 5.00 -21.30</p>
                        <p>Thursday 5.00 -21.30</p>
                        <p>Friday 5.00 -21.30</p>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Location
                    </h4>
                    <div class="contact-info-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3872.7840946455685!2d100.53912071483226!3d13.911849590244035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2837723f5b1bf%3A0xc16e13b4e509a96f!2z4Lin4Lix4LiU4Lic4Liy4Liq4Li44LiB4Lih4LiT4Li14LiI4Lix4LiB4Lij!5e0!3m2!1sth!2sth!4v1669498552026!5m2!1sth!2sth"
                    width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-info">
            <p>
                <a href="https://html.design/"></a><br><br></span>
                <a href="https://themewagon.com/" target="_blank"></a>
            </p>
        </div>
    </section>
    <!-- end about section -->

    
    <br /><br />
    <div class="container">	
        <h1>Comment Form</h1>	
		<br>		
		<form action = "comments.php"method="POST">
            <?php  if(isset($_SESSION['username'])) : ?>
                <a><?php echo $_SESSION['username']; ?></a>
            <?php endif ?>
            <?php  if(!isset($_SESSION['username'])) : ?>
                <p>Anonymous</p>
            <?php endif ?>
            <p> </p><p> </p><p> </p><p> </p><p> </p>
			<!-- <div class="form-group">
				<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
			</div> -->
            <?php  if(isset($_SESSION['username'])) : ?>
                <div class="form-group">
				<textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
			    </div>
			    <div class="form-group">
                    <input type="hidden" name="comment_id" id="comment_id" value="0" />
                    <input type="hidden" name="page_id" id="page_id" value="6" />
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
			    </div>
            <?php endif ?>
            <?php  if(!isset($_SESSION['username'])) : ?>
                <a href="login.php" class="order_online">>>Please Login Click Here<<</a>
            <?php endif ?>
			<!-- <div class="form-group">
				<textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
			</div> -->
			<span id="message"></span>
			<br>
		</form>		
		<br>
        <?php include_once 'show_comments.php'; ?>
		<!-- <div id="showComments"></div> -->
</div>

    

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="contact_link_box">
                            <a>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                Location 
              </span>
                            </a>
                            <a>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                Call +66 080 000 0000
              </span>
                            </a>
                            <a>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                VoyaTravel@gmail.com
              </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">
            Voya
          </a>
                        <p>
                            This website create for our term project
                        </p>
                        <p>
                            Thank you for Visit
                        </p>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Opening Hours
                    </h4>
                    <p>
                        Monday - Friday
                    </p>
                    <p>
                        1.00 Am -10.00 Pm
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-info">
            <p>
                &copy;<span id="displayYear"></span>
                <a href="https://html.design/"></a><br><br> <span id="displayYear"></span>
                <a href="https://themewagon.com/" target="_blank"></a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>