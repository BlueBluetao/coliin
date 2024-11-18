<?php
require_once 'config/config.php';
$page_title = "Technology Advantages - " . SITE_NAME;
include 'includes/header.php';
?>

<div id="page" class="site">
    <?php include 'includes/navigation.php'; ?>

    <!-- Hero Section -->
    <div class="page-header" style="background: url('images/solutions/solution.png') no-repeat center center;">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Technology Advantages</h2>
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
                            <span>OVERVIEW</span>
                        </div>
                        <h2 class="section-title">Integrated Manufacturing Technology</h2>
                        <p class="section-desc">Our advanced manufacturing technology integrates multiple processes to deliver comprehensive solutions for complex manufacturing needs.</p>
                        <ul class="solution-features">
                            <li>
                                <i class="icon ion-md-git-network"></i>
                                <div class="feature-info">
                                    <h4>Multi-process Integration</h4>
                                    <p>Seamless process combination</p>
                                </div>
                            </li>
                            <li>
                                <i class="icon ion-md-cog"></i>
                                <div class="feature-info">
                                    <h4>Advanced Equipment</h4>
                                    <p>State-of-the-art machinery</p>
                                </div>
                            </li>
                            <li>
                                <i class="icon ion-md-code-working"></i>
                                <div class="feature-info">
                                    <h4>Digital Manufacturing</h4>
                                    <p>Smart factory solutions</p>
                                </div>
                            </li>
                            <li>
                                <i class="icon ion-md-checkmark-circle"></i>
                                <div class="feature-info">
                                    <h4>Quality Control</h4>
                                    <p>Comprehensive assurance</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-box">
                        <div class="main-image">
                            <img src="images/advantages/tech-overview.jpg" alt="Manufacturing Technology">
                        </div>
                        <div class="experience-badge">
                            <span class="number">15+</span>
                            <span class="text">Years Experience</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Advantages Section -->
    <section class="tech-advantages-section">
        <div class="container">
            <div class="section-header text-center">
                <h4 class="text-primary">CORE ADVANTAGES</h4>
                <h2>Revolutionary Manufacturing Technologies</h2>
            </div>

            <!-- Video Showcase -->
            <div class="video-showcase mb-5">
                <div class="video-container">
                    <div class="video-wrapper">
                        <video id="tech-video" poster="images/advantages/video-poster.jpg">
                            <source src="videos/manufacturing-process.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="play-button">
                            <i class="icon ion-md-play"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Advantages Grid -->
            <div class="advantages-grid">
                <?php 
                $advantages = [
                    [
                        'icon' => 'ion-md-speedometer',
                        'title' => 'Enhanced Production Efficiency',
                        'stat_number' => '85',
                        'stat_symbol' => '%',
                        'stat_label' => 'Faster Production',
                        'description' => 'Implementation of high-speed machining technology enables rapid material removal and significantly reduced processing times.'
                    ],
                    [
                        'icon' => 'ion-md-precision',
                        'title' => 'Superior Precision Engineering',
                        'stat_number' => '0.001',
                        'stat_symbol' => 'mm',
                        'stat_label' => 'Precision Control',
                        'description' => 'Our 5-axis machining technology allows multi-faceted processing without repositioning workpieces, achieving exceptional accuracy.'
                    ],
                    [
                        'icon' => 'ion-md-infinite',
                        'title' => 'Integrated Process Innovation',
                        'stat_number' => '24',
                        'stat_symbol' => '/7',
                        'stat_label' => 'Operation Time',
                        'description' => 'Revolutionary multi-task processing center integrates turning, milling, drilling, and grinding operations into a seamless workflow.'
                    ]
                ];

                foreach($advantages as $advantage): ?>
                <div class="advantage-item">
                    <div class="advantage-content">
                        <div class="tech-icon-box">
                            <div class="icon-pulse"></div>
                            <div class="icon-wrapper">
                                <i class="icon <?php echo $advantage['icon']; ?>"></i>
                            </div>
                        </div>
                        <div class="tech-content">
                            <div class="tech-header">
                                <h3><?php echo $advantage['title']; ?></h3>
                                <div class="tech-line">
                                    <span class="line-dot"></span>
                                    <span class="line-dot"></span>
                                    <span class="line-dot"></span>
                                </div>
                            </div>
                            <div class="tech-info">
                                <div class="tech-stat">
                                    <span class="stat-number"><?php echo $advantage['stat_number']; ?></span>
                                    <span class="stat-symbol"><?php echo $advantage['stat_symbol']; ?></span>
                                    <span class="stat-label"><?php echo $advantage['stat_label']; ?></span>
                                </div>
                                <p><?php echo $advantage['description']; ?></p>
                            </div>
                            <div class="tech-indicator">
                                <div class="indicator-bar">
                                    <div class="indicator-fill" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Technology Stats -->
            <div class="tech-stats">
                <div class="row">
                    <?php 
                    $stats = [
                        ['value' => '85', 'unit' => '%', 'label' => 'Efficiency Increase'],
                        ['value' => '0.001', 'unit' => 'mm', 'label' => 'Precision Control'],
                        ['value' => '24', 'unit' => '/7', 'label' => 'Operation Capability']
                    ];
                    
                    foreach($stats as $stat): ?>
                    <div class="col-md-4">
                        <div class="stat-box">
                            <span class="counter"><?php echo $stat['value']; ?></span><?php echo $stat['unit']; ?>
                            <p><?php echo $stat['label']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <?php 
    // 引入报价部分
    $quote_title = "Need Advanced Manufacturing Solutions?";
    $quote_description = "Let us help you with our cutting-edge technology";
    include 'includes/quote-section.php';
    ?>

</div>

<?php include 'includes/footer.php'; ?> 