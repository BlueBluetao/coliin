<?php
require_once 'config/config.php';
$page_title = "Precision & Innovation - " . SITE_NAME;
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
                        <h2 class="page-title">Precision & Innovation</h2>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Innovation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skilled Craftsmanship Section -->
    <section class="craftsmanship-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content-box">
                        <div class="section-tag">
                            <span>SKILLED CRAFTSMANSHIP</span>
                        </div>
                        <h2 class="section-title">Expert Manufacturing Team</h2>
                        <p class="section-desc">Our skilled operators combine years of experience with deep technical knowledge to deliver precision manufacturing excellence.</p>
                        
                        <div class="expertise-list">
                            <div class="expertise-item">
                                <div class="icon-box">
                                    <i class="icon ion-md-build"></i>
                                </div>
                                <div class="expertise-content">
                                    <h4>Advanced Equipment Operation</h4>
                                    <p>Expert handling of sophisticated machinery with precision control</p>
                                </div>
                            </div>
                            <div class="expertise-item">
                                <div class="icon-box">
                                    <i class="icon ion-md-pulse"></i>
                                </div>
                                <div class="expertise-content">
                                    <h4>Manufacturing Process Mastery</h4>
                                    <p>In-depth understanding of complex manufacturing workflows</p>
                                </div>
                            </div>
                            <div class="expertise-item">
                                <div class="icon-box">
                                    <i class="icon ion-md-shield"></i>
                                </div>
                                <div class="expertise-content">
                                    <h4>Quality Control Excellence</h4>
                                    <p>Comprehensive quality assurance at every production stage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-box">
                        <!-- <img src="images/innovation/skilled-team.jpg" alt="Expert Manufacturing Team"> -->
                        <img src="images/solutions/solution_demo.jpg" alt="Expert Manufacturing Team">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advanced Materials Section -->
    <section class="materials-section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h4 class="text-primary">MATERIAL INNOVATION</h4>
                <h2>Advanced Materials & Processing</h2>
                <p>Utilizing cutting-edge materials and treatment technologies to achieve superior performance</p>
            </div>

            <div class="materials-grid">
                <?php 
                $materials = [
                    [
                        // 'image' => 'images/innovation/high-strength-alloy.jpg',
                        'image' => 'images/solutions/solution.png',
                        'title' => 'High-Strength Alloy Steel',
                        'description' => 'Premium alloy steels offering exceptional strength and durability',
                        'features' => [
                            'Superior tensile strength',
                            'Enhanced wear resistance',
                            'Optimized fatigue performance'
                        ]
                    ],
                    [
                        // 'image' => 'images/innovation/stainless-steel.jpg',
                        'image' => 'images/solutions/solution.png',
                        'title' => 'Premium Stainless Steel',
                        'description' => 'High-grade stainless steel with excellent corrosion resistance',
                        'features' => [
                            'Outstanding corrosion resistance',
                            'High temperature stability',
                            'Superior surface finish'
                        ]
                    ],
                    [
                        // 'image' => 'images/innovation/special-alloys.jpg',
                        'image' => 'images/solutions/solution.png',
                        'title' => 'Specialized Alloys',
                        'description' => 'Custom alloy solutions for specific application requirements',
                        'features' => [
                            'Application-specific properties',
                            'Enhanced performance characteristics',
                            'Optimized material composition'
                        ]
                    ]
                ];

                foreach($materials as $material): ?>
                <div class="material-card">
                    <div class="material-image">
                        <img src="<?php echo $material['image']; ?>" alt="<?php echo $material['title']; ?>">
                    </div>
                    <div class="material-content">
                        <h3><?php echo $material['title']; ?></h3>
                        <p><?php echo $material['description']; ?></p>
                        <ul class="material-features">
                            <?php foreach($material['features'] as $feature): ?>
                            <li><i class="icon ion-md-checkmark-circle"></i> <?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Innovation & Solutions Section -->
    <section class="solutions-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-box">
                        <div class="section-tag">
                            <span>PROCESS INNOVATION</span>
                        </div>
                        <h2 class="section-title">Innovative Solutions & Custom Development</h2>
                        <p class="section-desc">We excel in developing customized manufacturing solutions through innovative design and advanced process optimization.</p>
                        
                        <div class="innovation-process">
                            <div class="process-step">
                                <div class="step-number">
                                    <i class="icon ion-md-create"></i>
                                </div>
                                <div class="step-content">
                                    <h4>Product Design Optimization</h4>
                                    <p>Advanced CAD/CAM technology for optimal design solutions</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">
                                    <i class="icon ion-md-cog"></i>
                                </div>
                                <div class="step-content">
                                    <h4>Manufacturing Process Innovation</h4>
                                    <p>Development of innovative processes for complex requirements</p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="step-number">
                                    <i class="icon ion-md-flame"></i>
                                </div>
                                <div class="step-content">
                                    <h4>Advanced Heat Treatment</h4>
                                    <p>Specialized material treatment for enhanced performance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="solutions-showcase">
                        <div class="showcase-grid">
                            <div class="showcase-item">
                                <!-- <img src="images/innovation/product-design.jpg" alt="Product Design"> -->
                                <img src="images/solutions/solution.png" alt="Product Design">
                                <div class="showcase-overlay">
                                    <h4>Advanced Product Design</h4>
                                </div>
                            </div>
                            <div class="showcase-item">
                                <!-- <img src="images/innovation/process-innovation.jpg" alt="Process Innovation"> -->
                                <img src="images/solutions/solution.png" alt="Process Innovation">
                                <div class="showcase-overlay">
                                    <h4>Process Innovation</h4>
                                </div>
                            </div>
                            <div class="showcase-item">
                                <!-- <img src="images/innovation/quality-assurance.jpg" alt="Quality Assurance"> -->
                                <img src="images/solutions/solution.png" alt="Quality Assurance">
                                <div class="showcase-overlay">
                                    <h4>Quality Excellence</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php 
    $quote_title = "Looking for Innovative Manufacturing Solutions?";
    $quote_description = "Partner with us to bring your innovative ideas to life";
    include 'includes/quote-section.php';
    ?>

</div>

<?php include 'includes/footer.php'; ?> 