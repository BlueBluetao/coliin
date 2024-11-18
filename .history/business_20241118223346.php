<?php 
require_once 'config/config.php';
include 'includes/header.php';
include 'includes/navigation.php';

// 设置 quote section 的参数
$quote_tag = 'Partnership';
$quote_title = 'Professional Metal Parts Manufacturing Services';
$quote_description = 'We look forward to establishing long-term partnerships and providing high-quality products and services.';

// 引入 quote section 组件
include 'includes/quote-section.php';
?>

<!-- Hero Section -->
<div class="page-header" style="background: url('images/solutions/solution.png') no-repeat center center;">
    <div class="container">
        <div class="breadc-box no-line">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Business Structure</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Business</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Business Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="content-box">
                    <span class="text-primary">Professional Metal Parts Manufacturer</span>
                    <h2>One-Stop Metal Parts Manufacturing Solutions</h2>
                    <p>We specialize in providing high-quality custom metal parts manufacturing services with advanced equipment and professional technical teams to meet various industry needs.</p>
                    <ul class="solution-features">
                        <li><i class="icon ion-ios-checkmark"></i>Professional Technical Support</li>
                        <li><i class="icon ion-ios-checkmark"></i>Advanced Manufacturing Equipment</li>
                        <li><i class="icon ion-ios-checkmark"></i>Strict Quality Control</li>
                        <li><i class="icon ion-ios-checkmark"></i>Fast Delivery Cycle</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="images/solutions/solution_demo.jpg" alt="Business Overview" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Core Services -->
<section class="services-section bg-light">
    <div class="container">
        <div class="services-intro">
            <h4 class="text-primary">Our Core Services</h4>
            <h2>Professional Metal Parts Manufacturing Services</h2>
        </div>

        <div class="row">
            <!-- CNC Machining -->
            <div class="col-lg-4 col-md-6">
                <div class="service-box">
                    <div class="service-thumb">
                        <img src="images/solutions/steel.jpg" alt="CNC Machining">
                    </div>
                    <div class="service-content">
                        <h4>CNC Machining</h4>
                        <p>High-precision CNC machining services for various metal materials and complex parts.</p>
                        <ul class="service-list">
                            <li><i class="icon ion-ios-checkmark"></i>3-Axis, 4-Axis, 5-Axis Machining</li>
                            <li><i class="icon ion-ios-checkmark"></i>High Precision Parts</li>
                            <li><i class="icon ion-ios-checkmark"></i>Complex Surface Machining</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sheet Metal -->
            <div class="col-lg-4 col-md-6">
                <div class="service-box">
                    <div class="service-thumb">
                        <img src="images/solutions/stainless.jpg" alt="Sheet Metal">
                    </div>
                    <div class="service-content">
                        <h4>Sheet Metal Fabrication</h4>
                        <p>Professional sheet metal fabrication including cutting, bending, and welding services.</p>
                        <ul class="service-list">
                            <li><i class="icon ion-ios-checkmark"></i>Laser Cutting & Punching</li>
                            <li><i class="icon ion-ios-checkmark"></i>Bending & Welding</li>
                            <li><i class="icon ion-ios-checkmark"></i>Surface Treatment</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Mold Development -->
            <div class="col-lg-4 col-md-6">
                <div class="service-box">
                    <div class="service-thumb">
                        <img src="images/solutions/plastics.jpg" alt="Mold Development">
                    </div>
                    <div class="service-content">
                        <h4>Mold Development</h4>
                        <p>Professional mold design and manufacturing services for mass production needs.</p>
                        <ul class="service-list">
                            <li><i class="icon ion-ios-checkmark"></i>Injection Mold Development</li>
                            <li><i class="icon ion-ios-checkmark"></i>Stamping Die Design</li>
                            <li><i class="icon ion-ios-checkmark"></i>Rapid Prototyping</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 