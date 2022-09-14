<?php
require 'connection.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $message = $_POST["message"];
    $query = "INSERT INTO contact_details VALUES('', '$name','$email','$phoneNumber','$message')";
    mysqli_query($conn, $query);
    echo "<script> alert('Enqiry Sent To Admin'); </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Uttaranchal School of Computing Science</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="https://kit.fontawesome.com/09734a2680.js" crossorigin="anonymous"></script>
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
            <?php echo '<a class="navbar-brand" href="./index.php"><img src="./images/Logos/header-logo.png" style="height: 100px;" alt="image"></a>'?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end p-3 " id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><?php echo '<a class="nav-link active" style="font-weight: 700; font-size: 20px;" href="./index.php">Home</a>' ?></li>
                        <li><?php echo '<a class="nav-link" style="font-weight: 700; font-size: 20px;" href="./about.php">About</a>' ?></li>
                        <li><?php echo '<a class="nav-link" style="font-weight: 700; font-size: 20px;" href="./programmes.php">Programmes</a>' ?></li>
                        <li><?php echo '<a class="nav-link" style="font-weight: 700; font-size: 20px;" href="./staff.php">Our Staff</a>' ?></li>
                        <li><?php echo '<a class="nav-link" style="font-weight: 700; font-size: 20px;" href="./contact.php">Enquiry Now</a>' ?></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="section layout_padding padding_bottom-0">
        <h1 class=" p-4 w-100" style="margin-top: 60px; margin-bottom: -19.5px; text-align: center; color: white; font-size: 40px; font-weight: 500; background-color: #002147;"><span>Enquiry</span></h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="full">
                        <div class="heading_main text_align_center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section contact_section" style="background:#12385b;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="full float-right_img">
                        <img src="images/main-img/contact.svg" style="background-color: white;" alt="#">
                    </div>
                </div>
                <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
                    <div class="contact_form">
                        <form action="" method="post">
                            <fieldset>
                                <div class="full field">
                                    <input type="text" placeholder="Your Name" name="name" required />
                                </div>
                                <div class="full field">
                                    <input type="email" placeholder="Email Address" name="email" required />
                                </div>
                                <div class="full field">
                                    <input type="phn" placeholder="Phone Number" name="phoneNumber" required />
                                </div>
                                <div class="full field">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </div>
                                <div class="full field">
                                    <div class="center"><button type="submit" name="submit">Send</button></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-box">
        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_blog">
                        <div class="full margin-bottom_30">
                            <img src="images/Logos/header-logo.png" alt="#" />
                        </div>
                        <div class="full white_fonts">
                            <p style="text-align: justify;">Uttaranchal School of Computing Sciences having high end ICT (devices such as projector, Speaker, Wi-Fi and Smart TV’s) enabled class rooms. School is having five Computer Labs comprising high end configuration machine ensuring the 1:1 student- computer ratio with latest Software.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_blog footer_menu white_fonts">
                        <h3>Quick links</h3>
                        <ul>
                            <li><a href="#">> NAAC Certificate</a></li>
                            <li><a href="#">> Download Forms/Rules</a></li>
                            <li><a href="#">> Terms & Conditions</a></li>
                            <li><a href="#">> Application Form for Issue of Transcript of Marks</a></li>
                            <li><a href="#">> Disclaimer</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_blog full white_fonts">
                        <h3>Newsletter</h3>

                        <div class="newsletter_form">
                            <form action="index.html">
                                <input type="email" placeholder="Your Email" name="#" required />
                                <button>Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer_blog full white_fonts">
                        <h3>Contact us</h3>
                        <ul class="full">
                            <li><img src="images/i5.png"><a href="https://www.google.com/maps/place/Uttaranchal+University/@30.3410112,77.9522218,17z/data=!3m1!4b1!4m5!3m4!1s0x3908d5612204efb7:0x5eef311e57b07271!8m2!3d30.3410112!4d77.9544105"><span>Premnagar Dehradun (248007)<br>Uttarakhand</span></a></li>
                            <li><img src="images/i6.png"><a href="mailto:uim@uttaranchaluniversity.ac.in"><span>uim@uttaranchaluniversity.ac.in</span></a></li>
                            <li><img src="images/i7.png"><a href="tel:0135-2770354"><span>0135-2770354, 0135-2770302, 7248477771</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </footer>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>