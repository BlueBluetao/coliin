<?php 
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Solution Hero Section -->
<?php 
$page_title = "Sheet Metal Processing";
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => 'Sheet Metal Processing']
];
require_once 'includes/solution-hero-section.php';
?>

<!-- Services Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">SERVICES</h4>
                    <h2>Sheet Metal Fabrication</h2>
                    <p>Professional sheet metal fabrication services with advanced equipment and experienced craftsmen.</p>
                    <ul class="solution-features">
                        <?php
                        $features = [
                            'Precision Cutting & Forming',
                            'Custom Fabrication',
                            'Rapid Prototyping',
                            'Production Manufacturing'
                        ];
                        foreach($features as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <img src="images/solutions/solution_demo.jpg" alt="Sheet Metal Processing" class="img-fluid rounded">
                    <!-- <img src="images/solutions/sheet-metal-process.jpg" alt="Sheet Metal Processing" class="img-fluid rounded"> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Processing Methods -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Processing Methods</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $methods = [
                [
                    'icon' => 'ion-md-cut',
                    'title' => 'Laser Cutting',
                    'description' => 'High-precision laser cutting for various materials and thicknesses'
                ],
                [
                    'icon' => 'ion-md-hammer',
                    'title' => 'Bending',
                    'description' => 'Advanced CNC press brakes for precise bending operations'
                ],
                [
                    'icon' => 'ion-md-flash',
                    'title' => 'Welding',
                    'description' => 'Professional welding services for various metals'
                ],
                [
                    'icon' => 'ion-md-color-fill',
                    'title' => 'Surface Treatment',
                    'description' => 'Multiple finishing options for different requirements'
                ]
            ];

            foreach($methods as $method): ?>
            <div class="col-md-3">
                <div class="process-box text-center">
                    <div class="process-icon">
                        <i class="icon <?php echo $method['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $method['title']; ?></h3>
                    <p><?php echo $method['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Materials & Specifications -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-primary">MATERIALS</h4>
                <h2>Material Options</h2>
                <div class="coliin-space-30"></div>
                <div class="materials-list">
                    <?php
                    $materials = [
                        [
                            'title' => 'Stainless Steel',
                            'types' => '304, 316L, 201, etc.'
                        ],
                        [
                            'title' => 'Carbon Steel',
                            'types' => 'Q235, Q345, etc.'
                        ],
                        [
                            'title' => 'Aluminum',
                            'types' => '5052, 6061, 7075, etc.'
                        ]
                    ];

                    foreach($materials as $material): ?>
                    <div class="material-item">
                        <h4><?php echo $material['title']; ?></h4>
                        <p><?php echo $material['types']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-primary">SPECIFICATIONS</h4>
                <h2>Processing Capabilities</h2>
                <div class="coliin-space-30"></div>
                <div class="specs-table">
                    <table class="table">
                        <tbody>
                            <?php
                            $specifications = [
                                'Sheet Thickness' => '0.5mm - 20mm',
                                'Max Sheet Size' => '3000 x 1500mm',
                                'Bending Accuracy' => '±0.1°',
                                'Surface Finish' => 'Up to Ra 0.8'
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

<!-- Applications -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">APPLICATIONS</h4>
                <h2>Industry Applications</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $applications = [
                [
                    // 'image' => 'images/applications/industrial-equipment.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Industrial Equipment',
                    'description' => 'Machine covers, frames, and enclosures'
                ],
                [
                    // 'image' => 'images/applications/electronics.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Electronics',
                    'description' => 'Chassis, panels, and cabinets'
                ],
                [
                    // 'image' => 'images/applications/automotive.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Automotive',
                    'description' => 'Body panels and structural components'
                ]
            ];

            foreach($applications as $app): ?>
            <div class="col-md-4">
                <div class="application-box">
                    <img src="<?php echo $app['image']; ?>" alt="<?php echo $app['title']; ?>">
                    <h3><?php echo $app['title']; ?></h3>
                    <p><?php echo $app['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['sheet-metal']['title'];
$quote_description = $quote_sections['sheet-metal']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 