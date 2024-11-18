<?php 
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Solution Hero Section -->
<?php 
$page_title = "CNC Machining";
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => 'CNC Machining']
];
require_once 'includes/solution-hero-section.php';
?>

<!-- Service Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">OVERVIEW</h4>
                    <h2>Precision CNC Machining</h2>
                    <p>State-of-the-art CNC machining centers delivering high-precision components for various industries.</p>
                    <ul class="solution-features">
                        <?php
                        $features = [
                            'High Precision Tolerance: ±0.01mm',
                            'Multi-axis Capability',
                            'Advanced CAM Software',
                            '24/7 Production Capacity'
                        ];
                        foreach($features as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <img src="images/solutions/cnc-machine.jpg" alt="CNC Machine" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Machining Types -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Machining Services</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $services = [
                [
                    'icon' => 'ion-md-construct',
                    'title' => 'CNC Milling',
                    'items' => [
                        '3-4-5 Axis Milling',
                        'Complex Geometries',
                        'Surface Finishing',
                        'Max Size: 1000x800x600mm'
                    ]
                ],
                [
                    'icon' => 'ion-md-sync',
                    'title' => 'CNC Turning',
                    'items' => [
                        'Multi-axis Turning',
                        'Live Tooling',
                        'Thread Cutting',
                        'Max Diameter: Ø500mm'
                    ]
                ],
                [
                    'icon' => 'ion-md-grid',
                    'title' => 'Wire EDM',
                    'items' => [
                        'High Precision Cuts',
                        'Complex Profiles',
                        'Fine Surface Finish',
                        'Thickness up to 400mm'
                    ]
                ]
            ];

            foreach($services as $service): ?>
            <div class="col-md-4">
                <div class="service-box text-center">
                    <div class="service-icon">
                        <i class="icon <?php echo $service['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $service['title']; ?></h3>
                    <ul>
                        <?php foreach($service['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
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
                <h2>Material Expertise</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $materials = [
                [
                    'image' => 'images/solutions/aluminum.jpg',
                    'title' => 'Aluminum',
                    'description' => '6061, 7075, 5052'
                ],
                [
                    'image' => 'images/solutions/steel.jpg',
                    'title' => 'Steel',
                    'description' => '4140, 4340, Tool Steel'
                ],
                [
                    'image' => 'images/solutions/stainless.jpg',
                    'title' => 'Stainless Steel',
                    'description' => '303, 304, 316'
                ],
                [
                    'image' => 'images/solutions/plastics.jpg',
                    'title' => 'Engineering Plastics',
                    'description' => 'Delrin, PEEK, Nylon'
                ]
            ];

            foreach($materials as $material): ?>
            <div class="col-md-3">
                <div class="material-box">
                    <img src="<?php echo $material['image']; ?>" alt="<?php echo $material['title']; ?>">
                    <h3><?php echo $material['title']; ?></h3>
                    <p><?php echo $material['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Industries Served -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">INDUSTRIES</h4>
                <h2>Industries We Serve</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="industry-slider" data-show="4" data-arrow="true">
            <?php
            $industries = [
                [
                    'image' => 'images/solutions/aerospace.jpg',
                    'title' => 'Aerospace',
                    'items' => [
                        'Aircraft Components',
                        'Engine Parts',
                        'Structural Elements'
                    ]
                ],
                [
                    'image' => 'images/solutions/medical.jpg',
                    'title' => 'Medical',
                    'items' => [
                        'Surgical Instruments',
                        'Implant Components',
                        'Medical Devices'
                    ]
                ]
                // 可以添加更多行业
            ];

            foreach($industries as $industry): ?>
            <div class="industry-item">
                <div class="industry-box">
                    <img src="<?php echo $industry['image']; ?>" alt="<?php echo $industry['title']; ?>">
                    <h3><?php echo $industry['title']; ?></h3>
                    <ul>
                        <?php foreach($industry['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quality Control -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">QUALITY</h4>
                <h2>Quality Assurance</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $quality_sections = [
                [
                    'title' => 'Inspection Equipment',
                    'items' => [
                        'CMM Measurement',
                        '3D Scanning',
                        'Surface Roughness Testing',
                        'Material Hardness Testing'
                    ]
                ],
                [
                    'title' => 'Certifications',
                    'items' => [
                        'ISO 9001:2015',
                        'AS9100D',
                        'ISO 13485',
                        'ITAR Registered'
                    ]
                ]
            ];

            foreach($quality_sections as $section): ?>
            <div class="col-md-6">
                <div class="quality-content">
                    <h3><?php echo $section['title']; ?></h3>
                    <ul>
                        <?php foreach($section['items'] as $item): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['cnc']['title'];
$quote_description = $quote_sections['cnc']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 