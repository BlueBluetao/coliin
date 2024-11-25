<?php
require_once 'config/config.php';
require_once 'config/advantages_config.php';
$page_title = $advantages_config['page_title'] . " - " . SITE_NAME;
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Hero Section -->
<div class="page-header" style="background: url('<?php echo $advantages_config['hero_background']; ?>') no-repeat center center;">
    <div class="container">
        <div class="breadc-box no-line">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title"><?php echo $advantages_config['page_title']; ?></h2>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Technology</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Overview Section -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6">
                <div class="content-box">
                    <div class="section-tag">
                        <span><?php echo $advantages_config['overview']['tag']; ?></span>
                    </div>
                    <h2 class="section-title"><?php echo $advantages_config['overview']['title']; ?></h2>
                    <p class="section-desc"><?php echo $advantages_config['overview']['description']; ?></p>
                    <ul class="solution-features">
                        <?php foreach($advantages_config['overview']['features'] as $feature): ?>
                        <li>
                            <i class="icon <?php echo $feature['icon']; ?>"></i>
                            <div class="feature-info">
                                <h4><?php echo $feature['title']; ?></h4>
                                <p><?php echo $feature['desc']; ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <div class="main-image">
                        <img src="images/advantages/tech-overview.jpg" alt="Advanced Manufacturing Technology">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Advantages Section -->
<section class="bg-primary no-padding">
    <div class="">
        <div class="flex-row">
            <div class="video-section-left" style="background-image:url('images/advantages/tech-signature.jpg');">
                <div class="home-video video-player">
                    <a class="video-play" data-lity href="videos/tech.mp4"><i class="icon ion-md-play"></i></a>
                </div>
            </div>
            <div class="video-section-right">
                <div class="block-right">
                    <h4>CORE ADVANTAGES</h4>
                    <h2>Revolutionary Manufacturing <br> Technologies</h2>
                    <p>Our advanced manufacturing technology integrates multiple processes to deliver comprehensive solutions. With state-of-the-art machinery and smart factory solutions, we ensure superior quality control and efficient production processes...</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
$quote_title = $advantages_config['quote']['title'];
$quote_description = $advantages_config['quote']['description'];
include 'includes/quote-section.php';
include 'includes/footer.php'; 
?> 

<script src="js/advantages.js"></script> 