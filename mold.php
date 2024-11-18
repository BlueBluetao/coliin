<?php 
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Solution Hero Section -->
<?php 
$page_title = "Mold & Die Solutions";
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => 'Mold & Die']
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
                    <h2>Professional Mold Making</h2>
                    <p>Expert mold design and manufacturing services for plastic injection molding and die casting.</p>
                    <ul class="solution-features">
                        <?php
                        $features = [
                            'Advanced CAD/CAM Design',
                            'High-precision Machining',
                            'Quality Heat Treatment',
                            'Professional Assembly'
                        ];
                        foreach($features as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <img src="images/solutions/solution_demo.jpg" alt="Mold Making" class="img-fluid rounded">
                    <!-- <img src="images/solutions/mold-making.jpg" alt="Mold Making" class="img-fluid rounded"> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mold Types -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Mold & Die Types</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $mold_types = [
                [
                    'icon' => 'ion-md-cube',
                    'title' => 'Injection Molds',
                    'items' => [
                        'Single Cavity Molds',
                        'Multi Cavity Molds',
                        'Hot Runner Systems',
                        'Cold Runner Systems'
                    ]
                ],
                [
                    'icon' => 'ion-md-hammer',
                    'title' => 'Die Casting Dies',
                    'items' => [
                        'Aluminum Die Casting',
                        'Zinc Die Casting',
                        'Magnesium Die Casting',
                        'Complex Core Systems'
                    ]
                ],
                [
                    'icon' => 'ion-md-construct',
                    'title' => 'Stamping Dies',
                    'items' => [
                        'Progressive Dies',
                        'Transfer Dies',
                        'Deep Drawing Dies',
                        'Compound Dies'
                    ]
                ]
            ];

            foreach($mold_types as $type): ?>
            <div class="col-md-4">
                <div class="mold-type-box">
                    <div class="type-icon">
                        <i class="icon <?php echo $type['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $type['title']; ?></h3>
                    <ul>
                        <?php foreach($type['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Design & Manufacturing -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">PROCESS</h4>
                <h2>Design & Manufacturing Process</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="process-timeline">
            <?php
            $processes = [
                [
                    'icon' => 'ion-md-create',
                    'title' => 'Design Phase',
                    'items' => [
                        '3D Modeling',
                        'Flow Analysis',
                        'Design Optimization'
                    ]
                ],
                [
                    'icon' => 'ion-md-build',
                    'title' => 'Manufacturing',
                    'items' => [
                        'CNC Machining',
                        'EDM Processing',
                        'Heat Treatment'
                    ]
                ],
                [
                    'icon' => 'ion-md-checkmark-circle',
                    'title' => 'Quality Control',
                    'items' => [
                        'CMM Inspection',
                        'Trial Production',
                        'Final Testing'
                    ]
                ]
            ];

            foreach($processes as $process): ?>
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="icon <?php echo $process['icon']; ?>"></i>
                </div>
                <div class="timeline-content">
                    <h3><?php echo $process['title']; ?></h3>
                    <ul>
                        <?php foreach($process['items'] as $item): ?>
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
        <div class="application-grid">
            <div class="row">
                <?php
                $applications = [
                    [
                        // 'image' => 'images/applications/automotive-mold.jpg',
                        'image' => 'images/solutions/solution_demo.jpg',
                        'title' => 'Automotive',
                        'description' => 'Interior & exterior parts, under-hood components'
                    ],
                    [
                        // 'image' => 'images/applications/electronics-mold.jpg',
                        'image' => 'images/solutions/solution_demo.jpg',
                        'title' => 'Electronics',
                        'description' => 'Housings, connectors, precision components'
                    ],
                    [
                        // 'image' => 'images/applications/medical-mold.jpg',
                        'image' => 'images/solutions/solution_demo.jpg',
                        'title' => 'Medical',
                        'description' => 'Medical devices, laboratory equipment'
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
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['mold']['title'];
$quote_description = $quote_sections['mold']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 