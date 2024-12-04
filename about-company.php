<?php
require_once 'config/company_config.php';
include 'includes/header.php';
include 'includes/navigation.php';
?>

<main class="main-content">
    <!-- Page Header -->
    <div class="page-header" style="background: url('images/subheader-about.jpg') no-repeat center center;">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">About Us</h2>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="about-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="story-content">
                        <h4 class="text-primary mb-3"><?php echo $company_config['brief']['title']; ?></h4>
                        <h2 class="mb-4"><?php echo $company_config['name']; ?></h2>
                        <?php foreach ($company_config['brief']['description'] as $paragraph): ?>
                        <p class="mb-4"><?php echo $paragraph; ?></p>
                        <?php endforeach; ?>
                        <a href="contact-us.php" class="btn btn-primary mt-4">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="container py-5 my-5 statistics-section">
            <div class="row justify-content-center">
                <?php foreach ($company_config['stats'] as $key => $stat): ?>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="icon-box text-center p-4 shadow-sm rounded animate-on-scroll">
                        <div class="icon-box-title">
                            <h4>
                                <?php echo $stat['title']; ?> 
                                <div class="stat-number">
                                    <span class="counter" data-target="<?php echo $stat['count']; ?>">0</span>
                                    <span class="plus">+</span>
                                </div>
                            </h4>
                        </div>
                        <p><?php echo $stat['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Global Presence Section -->
        <div class="container py-5 my-5 presence-section">
            <div class="row">
                <div class="col-md-7 pr-md-5 mb-4 mb-md-0">
                    <div class="values-content animate-on-scroll fade-in">
                        <h3 class="mb-4">Global Presence</h3>
                        <p class="mb-4">With annual revenue exceeding <?php echo $company_config['achievements']['annual_revenue']; ?>, 
                        our business spans across <?php echo implode(', ', $company_config['achievements']['global_presence']); ?>.</p>
                        <p class="mb-4">We have established strong partnerships with over <?php echo $company_config['stats']['suppliers']['count']; ?> global manufacturers.</p>
                        <div class="client-list mt-4 animate-on-scroll fade-in">
                            <h5 class="mb-3">Our Clients:</h5>
                            <div class="client-logos">
                                <p>Trusted by industry leaders including <?php echo implode(', ', $company_config['achievements']['major_clients']); ?> and more</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="advantages-box animate-on-scroll slide-in">
                        <h3 class="mb-4">Our Advantages</h3>
                        <ul class="advantages-list mb-4">
                            <?php foreach ($company_config['strengths'] as $strength): ?>
                            <li class="mb-3">
                                <i class="icon ion-md-checkmark-circle mr-2"></i>
                                <?php echo $strength; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="get-a-quote.php" class="btn btn-primary">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?> 