<?php
require_once 'config/config.php';
require_once 'config/advantages_config.php';
$page_title = $advantages_config['page_title'] . " - " . SITE_NAME;
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- 在 header 之前添加新的 CSS 文件引入 -->
<link rel="stylesheet" href="css/advantages.css">
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
        <div class="row">
            <!-- 左侧描述部分 - 8列 -->
            <div class="col-md-8">
                <div class="content-box">
                    <h4 class="text-primary">OVERVIEW</h4>
                    <h2><?php echo $advantages_config['overview']['title']; ?></h2>
                    <div class="overview-description">
                        <?php echo $advantages_config['overview']['description']; ?>
                    </div>
                </div>
            </div>
            
            <!-- 右侧特性列表 - 4列 -->
            <div class="col-md-4">
                <div class="features-box">
                    <h4 class="text-primary mb-4">KEY FEATURES</h4>
                    <ul class="features-list">
                        <?php foreach($advantages_config['overview']['features'] as $feature): ?>
                        <li class="feature-item">
                            <i class="icon ion-md-checkmark-circle"></i>
                            <div class="feature-info">
                                <h4><?php echo $feature['title']; ?></h4>
                                <p><?php echo $feature['desc']; ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
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