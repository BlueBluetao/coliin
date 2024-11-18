<?php 
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Solution Hero Section -->
<?php 
$page_title = "5-Axis Machining";
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => '5-Axis Machining']
];
require_once 'includes/solution-hero-section.php';
?>

<!-- Technology Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">TECHNOLOGY</h4>
                    <h2>Advanced 5-Axis Machining</h2>
                    <p>Our state-of-the-art 5-axis machining centers deliver precision and efficiency for complex parts manufacturing.</p>
                    <ul class="solution-features">
                        <?php
                        $features = [
                            'Simultaneous 5-axis movement',
                            'Complex geometry capability',
                            'High precision control',
                            'Reduced setup time'
                        ];
                        foreach($features as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <img src="images/solutions/5-axis-machine.jpg" alt="5-Axis Machine" class="img-fluid rounded">
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
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>What We Can Machine</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $capabilities = [
                [
                    'icon' => 'ion-md-cog',
                    'title' => 'Aerospace Parts',
                    'items' => [
                        'Turbine blades',
                        'Complex housings',
                        'Structural components'
                    ]
                ],
                [
                    'icon' => 'ion-md-build',
                    'title' => 'Medical Devices',
                    'items' => [
                        'Implants',
                        'Surgical instruments',
                        'Custom fixtures'
                    ]
                ],
                [
                    'icon' => 'ion-md-cube',
                    'title' => 'Mold & Die',
                    'items' => [
                        'Complex mold cores',
                        'Die components',
                        'Pattern making'
                    ]
                ]
            ];

            foreach($capabilities as $capability): ?>
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
                <h4 class="text-primary">SPECIFICATIONS</h4>
                <h2>Machine Specifications</h2>
                <div class="coliin-space-30"></div>
                
                <div class="specs-table">
                    <table class="table">
                        <tbody>
                            <?php
                            $specifications = [
                                'Work Envelope' => '800 x 800 x 800 mm',
                                'Spindle Speed' => 'Up to 20,000 RPM',
                                'Axis Travel' => 'X/Y/Z: 800/800/800mm',
                                'Positioning Accuracy' => '±0.005mm'
                            ];

                            foreach($specifications as $key => $value): ?>
                            <tr>
                                <td><?php echo $key; ?></td>
                                <td><?php echo $value; ?></td>
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
                <h4 class="text-primary">CASE STUDIES</h4>
                <h2>Success Stories</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        
        <div class="case-slider" data-show="3" data-arrow="true">
            <?php
            $cases = [
                [
                    'image' => 'images/solutions/aerospace-case.jpg',
                    'title' => 'Aerospace Component',
                    'description' => 'Complex turbine blade manufacturing for aerospace client'
                ]
                // 可以添加更多案例
            ];

            foreach($cases as $case): ?>
            <div class="case-item">
                <div class="case-box">
                    <div class="case-image">
                        <img src="<?php echo $case['image']; ?>" alt="<?php echo $case['title']; ?>">
                    </div>
                    <div class="case-content">
                        <h3><?php echo $case['title']; ?></h3>
                        <p><?php echo $case['description']; ?></p>
                        <a href="cases.php" class="btn btn-primary">View Case</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['5-axis']['title'];
$quote_description = $quote_sections['5-axis']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 