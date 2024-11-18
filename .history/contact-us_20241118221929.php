<?php
require_once 'config/config.php';
$page_title = "Contact Us - " . SITE_NAME;
include 'includes/header.php';
?>

<div id="page" class="site">
    <?php include 'includes/navigation.php'; ?>

    <div id="content" class="site-content">
        <!-- Hero Section -->
        <div class="page-header" style="background: url('images/subheader-contact.jpg') no-repeat center center;">
            <div class="container">
                <div class="breadc-box no-line">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-title">Contact Us</h2>
                            <ul id="breadcrumbs" class="breadcrumbs none-style">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Info Section -->
        <section class="bg-contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4 class="text-primary">CONTACT INFO</h4>
                        <div class="contact-info">
                            <h2>Hotline : <span class="text-primary"><?php echo COMPANY_PHONE; ?></span></h2>
                            <p><i class="icon ion-md-mail"></i> <?php echo COMPANY_EMAIL; ?></p>
                            <p><i class="icon ion-md-pin"></i> <?php echo COMPANY_ADDRESS; ?> (<a href="#" class="text-primary">View map</a>)</p>
                        </div>
                        <div class="space-coliin"></div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <form class="form-contact" action="contact.php" method="post">
                            <h3>Contact form</h3>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your name" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea rows="6" name="message" id="message" class="form-control" placeholder="your message" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit btn btn-primary">
                                    <input type="submit" value="Subscribe" class="wpcf7-form-control wpcf7-submit btn btn-border">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>View map:</h3>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d52963.585075701754!2d151.09267899747485!3d-33.935364681316976!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ba2323eb31f3%3A0x9c1faff5827b168a!2sBexley%20North%20Station!5e0!3m2!1svi!2s!4v1571651963999!5m2!1svi!2s" 
                                width="100%" 
                                height="600" 
                                frameborder="0" 
                                style="border:0;" 
                                allowfullscreen="">
                            </iframe>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary btn-m-r">Get direction</a>
                            <a href="#" class="btn btn-border">Google Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 