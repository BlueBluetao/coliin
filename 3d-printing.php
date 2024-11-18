<?php 
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Solution Hero Section -->
<?php 
$page_title = "3D Printing";
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => '3D Printing']
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
                    <h2>Advanced Additive Manufacturing</h2>
                    <p>Our industrial 3D printing solutions utilize cutting-edge technology to deliver high-quality parts with complex geometries and superior material properties.</p>
                    <ul class="solution-features">
                        <?php
                        $features = [
                            'Rapid Prototyping',
                            'Production-Grade Materials',
                            'Complex Geometry Capability',
                            'Design Freedom'
                        ];
                        foreach($features as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <!-- <img src="images/solutions/3d-printer-industrial.jpg" alt="Industrial 3D Printer" class="img-fluid rounded"> -->
                    <img src="images/solutions/solution_demo.jpg" alt="Industrial 3D Printer" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Printing Technologies -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Printing Technologies</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $technologies = [
                [
                    'icon' => 'ion-md-construct',
                    'title' => 'SLA',
                    'description' => 'Stereolithography for high-detail prototypes and patterns',
                    'features' => [
                        'High Resolution',
                        'Smooth Surface',
                        'Clear Parts'
                    ]
                ],
                [
                    'icon' => 'ion-md-flame',
                    'title' => 'SLS',
                    'description' => 'Selective Laser Sintering for functional parts',
                    'features' => [
                        'Strong Parts',
                        'Complex Geometry',
                        'No Supports'
                    ]
                ],
                [
                    'icon' => 'ion-md-flash',
                    'title' => 'DMLS',
                    'description' => 'Direct Metal Laser Sintering for metal parts',
                    'features' => [
                        'Metal Parts',
                        'High Strength',
                        'Heat Resistant'
                    ]
                ],
                [
                    'icon' => 'ion-md-cube',
                    'title' => 'FDM',
                    'description' => 'Fused Deposition Modeling for functional prototypes',
                    'features' => [
                        'Cost Effective',
                        'Quick Turnaround',
                        'Durable Parts'
                    ]
                ]
            ];

            foreach($technologies as $tech): ?>
            <div class="col-md-3">
                <div class="tech-box text-center">
                    <div class="tech-icon">
                        <i class="icon <?php echo $tech['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $tech['title']; ?></h3>
                    <p><?php echo $tech['description']; ?></p>
                    <ul>
                        <?php foreach($tech['features'] as $feature): ?>
                        <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Materials Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">MATERIALS</h4>
                <h2>Available Materials</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $materials = [
                [
                    // 'image' => 'images/materials/metal-powders.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Metal Powders',
                    'items' => ['Stainless Steel', 'Titanium', 'Aluminum']
                ],
                [
                    // 'image' => 'images/materials/engineering-plastics.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Engineering Plastics',
                    'items' => ['PA12 (Nylon)', 'TPU', 'PEEK']
                ],
                [
                    // 'image' => 'images/materials/resins.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Resins',
                    'items' => ['Standard', 'Tough', 'Clear']
                ],
                [
                    // 'image' => 'images/materials/composites.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Composites',
                    'items' => ['Carbon Fiber', 'Glass Filled', 'Kevlar']
                ]
            ];

            foreach($materials as $material): ?>
            <div class="col-md-3">
                <div class="material-card">
                    <img src="<?php echo $material['image']; ?>" alt="<?php echo $material['title']; ?>">
                    <h3><?php echo $material['title']; ?></h3>
                    <ul>
                        <?php foreach($material['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
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
        <div class="application-slider" data-show="3" data-arrow="true">
            <?php
            $applications = [
                [
                    // 'image' => 'images/applications/aerospace-3d.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Aerospace',
                    'description' => 'Lightweight components and complex assemblies',
                    'items' => ['Ducting', 'Brackets', 'Tooling']
                ],
                [
                    // 'image' => 'images/applications/medical-3d.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Medical',
                    'description' => 'Custom medical devices and surgical guides',
                    'items' => ['Implants', 'Prosthetics', 'Surgical Tools']
                ],
                [
                    // 'image' => 'images/applications/automotive-3d.jpg',
                    'image' => 'images/solutions/solution_demo.jpg',
                    'title' => 'Automotive',
                    'description' => 'Rapid prototyping and end-use parts',
                    'items' => ['Prototypes', 'Tooling', 'Spare Parts']
                ]
            ];

            foreach($applications as $app): ?>
            <div class="application-item">
                <div class="application-box">
                    <img src="<?php echo $app['image']; ?>" alt="<?php echo $app['title']; ?>">
                    <div class="application-content">
                        <h3><?php echo $app['title']; ?></h3>
                        <p><?php echo $app['description']; ?></p>
                        <ul>
                            <?php foreach($app['items'] as $item): ?>
                            <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['3d-printing']['title'];
$quote_description = $quote_sections['3d-printing']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 