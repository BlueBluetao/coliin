<?php 
require_once 'config/config.php';
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Hero Section -->
<div class="page-header" style="background: url('images/solutions/solution.png') no-repeat center center;">
    <div class="container">
        <div class="breadc-box no-line">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Success Stories</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Cases</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cases Overview -->
<section class="cases-section">
    <div class="container">
        <!-- Section Intro -->
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="section-tag">Our Success Stories</span>
                <h2 class="section-title">Featured Case Studies in Metal Manufacturing</h2>
                <p class="section-desc">Explore our successful projects across various industries, showcasing our expertise in precision manufacturing and custom solutions.</p>
            </div>
        </div>

        <!-- Case Studies Grid -->
        <div class="row">
            <!-- Automotive Industry Case -->
            <div class="col-lg-4 col-md-6">
                <div class="case-box">
                    <div class="case-image">
                        <img src="images/solutions/medical.jpg" alt="Automotive Parts">
                        <div class="case-overlay">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="case-content">
                        <div class="case-category">Automotive Industry</div>
                        <h3>Custom Transmission Components</h3>
                        <p>High-precision manufacturing of transmission parts for a leading automotive manufacturer, achieving 99.9% quality pass rate.</p>
                        <ul class="case-highlights">
                            <li><i class="icon ion-ios-checkmark"></i>50,000+ parts manufactured</li>
                            <li><i class="icon ion-ios-checkmark"></i>±0.01mm precision tolerance</li>
                            <li><i class="icon ion-ios-checkmark"></i>30% cost reduction</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Medical Equipment Case -->
            <div class="col-lg-4 col-md-6">
                <div class="case-box">
                    <div class="case-image">
                        <img src="images/solutions/medical.jpg" alt="Medical Equipment">
                        <div class="case-overlay">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="case-content">
                        <div class="case-category">Medical Industry</div>
                        <h3>Surgical Equipment Components</h3>
                        <p>Development and production of high-precision surgical instrument parts meeting strict medical standards.</p>
                        <ul class="case-highlights">
                            <li><i class="icon ion-ios-checkmark"></i>ISO 13485 certified</li>
                            <li><i class="icon ion-ios-checkmark"></i>316L stainless steel</li>
                            <li><i class="icon ion-ios-checkmark"></i>100% quality inspection</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Aerospace Case -->
            <div class="col-lg-4 col-md-6">
                <div class="case-box">
                    <div class="case-image">
                        <img src="images/solutions/medical.jpg" alt="Aerospace Parts">
                        <!-- <img src="images/solutions/aerospace.jpg" alt="Aerospace Parts"> -->
                        <div class="case-overlay">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="case-content">
                        <div class="case-category">Aerospace Industry</div>
                        <h3>Aircraft Engine Components</h3>
                        <p>Manufacturing of critical aircraft engine components with advanced 5-axis CNC machining technology.</p>
                        <ul class="case-highlights">
                            <li><i class="icon ion-ios-checkmark"></i>AS9100D certified</li>
                            <li><i class="icon ion-ios-checkmark"></i>Complex geometry parts</li>
                            <li><i class="icon ion-ios-checkmark"></i>Heat-resistant alloys</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Industrial Equipment Case -->
            <div class="col-lg-4 col-md-6">
                <div class="case-box">
                    <div class="case-image">
                        <img src="images/solutions/industrial.jpg" alt="Industrial Equipment">
                        <div class="case-overlay">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="case-content">
                        <div class="case-category">Industrial Equipment</div>
                        <h3>Heavy Machinery Components</h3>
                        <p>Large-scale manufacturing of heavy machinery parts with precise specifications and durability requirements.</p>
                        <ul class="case-highlights">
                            <li><i class="icon ion-ios-checkmark"></i>Large format machining</li>
                            <li><i class="icon ion-ios-checkmark"></i>Wear-resistant coating</li>
                            <li><i class="icon ion-ios-checkmark"></i>Extended service life</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Electronics Case -->
            <div class="col-lg-4 col-md-6">
                <div class="case-box">
                    <div class="case-image">
                        <img src="images/solutions/electronics.jpg" alt="Electronics Manufacturing">
                        <div class="case-overlay">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="case-content">
                        <div class="case-category">Electronics Industry</div>
                        <h3>Precision Electronics Housing</h3>
                        <p>Custom manufacturing of precision electronics enclosures with complex EMI shielding requirements.</p>
                        <ul class="case-highlights">
                            <li><i class="icon ion-ios-checkmark"></i>EMI shielding design</li>
                            <li><i class="icon ion-ios-checkmark"></i>IP67 protection grade</li>
                            <li><i class="icon ion-ios-checkmark"></i>Rapid prototyping</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Energy Industry Case -->
            <div class="col-lg-4 col-md-6">
                <div class="case-box">
                    <div class="case-image">
                        <img src="images/solutions/energy.jpg" alt="Energy Equipment">
                        <div class="case-overlay">
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="case-content">
                        <div class="case-category">Energy Industry</div>
                        <h3>Solar Mounting Systems</h3>
                        <p>Mass production of solar panel mounting systems with high durability and weather resistance.</p>
                        <ul class="case-highlights">
                            <li><i class="icon ion-ios-checkmark"></i>Anti-corrosion treatment</li>
                            <li><i class="icon ion-ios-checkmark"></i>20-year warranty</li>
                            <li><i class="icon ion-ios-checkmark"></i>Wind load tested</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php
$quote_tag = 'Collaboration';
$quote_title = 'Let\'s Create Your Success Story';
$quote_description = 'Partner with us to bring your metal manufacturing projects to life with precision and excellence.';

include 'includes/quote-section.php';
?>

<?php include 'includes/footer.php'; ?> 