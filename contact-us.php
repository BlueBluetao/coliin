<?php
require_once 'config/config.php';
$page_title = "Contact Us - " . SITE_NAME;
include 'includes/header.php';

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 验证和清理输入数据
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // 验证数据
    $errors = [];
    if (empty($name) || strlen($name) > 100) {
        $errors[] = "Name cannot be empty and must not exceed 100 characters";
    }
    
    if (empty($phone)) {
        $errors[] = "Please enter your phone number";
    } else if (strlen($phone) > 20) {
        $errors[] = "Phone number cannot exceed 20 characters";
    } else if (!preg_match("/^[0-9\-\+\(\)\s]+$/", $phone)) {
        $errors[] = "Please enter a valid phone number format";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
        $errors[] = "Please enter a valid email address";
    }
    
    if (empty($msg) || strlen($msg) > 1000) {
        $errors[] = "Message cannot be empty and must not exceed 1000 characters";
    }

    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        )
    );
    
    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO contacts (name, phone, email, message) VALUES (?, ?, ?, ?)");
            $stmt->execute([$name, $phone, $email, $msg]);
            $message = '<div class="alert alert-success">Thank you for your message. We will contact you soon!</div>';
        } catch (PDOException $e) {
            $message = '<div class="alert alert-danger">Sorry, submission failed. Please try again later.</div>';
        }
    } else {
        $message = '<div class="alert alert-danger">' . implode('<br>', $errors) . '</div>';
    }
}
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
                            <span style="font-weight: 900;line-height: 1;font-size:30px;">Hotline : <span class="text-primary"><?php echo COMPANY_PHONE; ?></span></span>

                            <p><i class="icon ion-md-mail"></i> <?php echo COMPANY_EMAIL; ?></p>
                            <p><i class="icon ion-md-pin"></i> <?php echo COMPANY_ADDRESS; ?> (<a href="#map" class="text-primary">View map</a>)</p>
                        </div>
                        <div class="space-coliin"></div>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <form class="form-contact" method="post">
                            <?php echo $message; ?>
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
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section id="map">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>View map:</h3>
                        <div class="map">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217785.07967205757!2d121.21668883205673!3d31.225344876851747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35b27040b1f53c33%3A0x295129423c364a1!2z5Lit5Zu95rWZ5rGf5Y2X6YGT5Lit5b-D5Yy6!5e0!3m2!1szh-CN!2scn!4v1710910844659!5m2!1szh-CN!2scn" 
                                width="100%" 
                                height="600" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 