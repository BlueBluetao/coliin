<?php 
require_once 'config/config.php';
require_once 'config/5_axis_config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<link rel="stylesheet" href="css/5-axis.css">
<script src="js/5-axis.js" defer></script>

<!-- Solution Hero Section -->
<?php 
$page_title = $axis_config['hero']['title'];
$breadcrumbs = $axis_config['hero']['breadcrumbs'];
require_once 'includes/solution-hero-section.php';
?>

<!-- Technology Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-box">
                    <h4 class="text-primary"><?php echo $axis_config['technology']['subtitle']; ?></h4>
                    <h2><?php echo $axis_config['technology']['title']; ?></h2>
                    <p><?php echo $axis_config['technology']['overview']['content']; ?></p>
                    
                    <div class="row">
                        <?php foreach($axis_config['technology']['overview']['advantages'] as $advantage): ?>
                        <div class="col-md-6 mb-4">
                            <div class="advantage-item">
                                <div class="advantage-icon">
                                    <i class="icon <?php echo $advantage['icon']; ?>"></i>
                                </div>
                                <div class="advantage-content">
                                    <h4><?php echo $advantage['title']; ?></h4>
                                    <p><?php echo $advantage['description']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Capabilities -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary"><?php echo $axis_config['capabilities']['subtitle']; ?></h4>
                <h2><?php echo $axis_config['capabilities']['title']; ?></h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($axis_config['capabilities']['items'] as $capability): ?>
            <div class="col-md-4">
                <div class="capability-box">
                    <div class="capability-icon">
                        <i class="icon <?php echo $capability['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $capability['title']; ?></h3>
                    <ul>
                        <?php foreach($capability['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Technical Specifications -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary"><?php echo $axis_config['specifications']['subtitle']; ?></h4>
                <h2><?php echo $axis_config['specifications']['title']; ?></h2>
                <div class="coliin-space-30"></div>
                
                <div class="specs-table">
                    <table class="table">
                        <tbody>
                            <?php foreach($axis_config['specifications']['items'] as $spec): ?>
                            <tr>
                                <td><?php echo $spec['label']; ?></td>
                                <td><?php echo $spec['value']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary"><?php echo $axis_config['cases']['subtitle']; ?></h4>
                <h2><?php echo $axis_config['cases']['title']; ?></h2>
                <div class="navigation-buttons">
                    <button id="prev"><i class="icon ion-md-arrow-back"></i></button>
                    <button id="next"><i class="icon ion-md-arrow-forward"></i></button>
                </div>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        
        <div class="case-slider">
            <?php foreach($axis_config['cases']['items'] as $case): ?>
            <div class="case-item">
                <div class="case-study-box">
                    <div class="case-image">
                        <img src="<?php echo $case['image']; ?>" alt="<?php echo $case['title']; ?>">
                    </div>
                    <div class="case-overlay">
                        <div class="case-content">
                            <h3><?php echo $case['title']; ?></h3>
                            <p><?php echo $case['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $axis_config['quote']['title'];
$quote_description = $axis_config['quote']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 