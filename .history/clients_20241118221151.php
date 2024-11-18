<?php 
require_once 'config/config.php';
$page_title = "Our Clients - " . SITE_NAME;
include 'includes/header.php'; 
?>

<div id="page" class="site">
    <!-- 引入导航 -->
    <?php include 'includes/navigation.php'; ?>

    <!-- Hero Section -->
    <div class="page-header" style="background: url('images/solutions/solution.png') no-repeat center center;">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Our Clients</h2>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Clients</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div id="content" class="site-content">
        <!-- Partners Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Partnerships & Affiliations</h3>
                    </div>
                    <?php foreach($partners as $partner): ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="partner-list">
                            <img src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['name']; ?>">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="no-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Happy Clients Say</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="testi-box list-testi">
                            <div class="testi-content">
                                <p>"I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment."</p>
                            </div>
                            <div class="testi-info">
                                <img src="images/testi-img-1.png" alt="" class="circle-img">
                                <h4>Emilia Clarke<span>Manager Avenger company</span></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="testi-box list-testi">
                            <div class="testi-content">
                                <p>"A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart."</p>
                            </div>
                            <div class="testi-info">
                                <img src="images/testi-img-2.png" alt="" class="circle-img">
                                <h4>Micheal Sejuro<span>Manager Fusion themes company</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        // 配置报价部分的文案
        $quote_title = "Ready to work with us?";
        $quote_description = "Get in touch for a custom quote for your project";
        
        // 引入quote-section组件
        include 'includes/quote-section.php';
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 