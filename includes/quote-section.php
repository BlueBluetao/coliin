<?php
/**
 * Quote Section Component
 * @param string $quote_title - Quote title
 * @param string $quote_description - Quote description
 */

// Set default values
$quote_title = $quote_title ?? 'Let us understand your needs';
$quote_description = $quote_description ?? 'Professional manufacturing solutions';

// Common quote component configuration
$quote_config = [
    'button' => [
        'text' => 'Get a Quote',
        'url' => 'get-a-quote.php'
    ],
    'certifications' => [
        [
            'image' => 'images/certifications/itar.png',
            'alt' => 'ITAR Certified'
        ],
        [
            'image' => 'images/certifications/iso.png',
            'alt' => 'ISO Certified'
        ],
        [
            'image' => 'images/certifications/sa8000.png',
            'alt' => 'SA8000 Social Accountability'
        ],
        [
            'image' => 'images/certifications/iatf16949.png',
            'alt' => 'IATF16949 Quality'
        ]
    ]
];
?>

<!-- Quote Section -->
<section class="quote-section bg-light">
    <div class="container">
        <div class="row flex-row align-items-center">
            <div class="col-md-7">
                <div class="content-box quote-content">
                    <span class="text-primary quote-tag">Get a Quote</span>
                    <h2 class="quote-title"><?php echo $quote_title; ?></h2>
                    <p class="quote-description"><?php echo $quote_description; ?></p>
                    
                    <div class="quote-features">
                        <div class="feature-item">
                            <i class="icon ion-ios-checkmark-circle"></i>
                            <span>Quick Response</span>
                        </div>
                        <div class="feature-item">
                            <i class="icon ion-ios-checkmark-circle"></i>
                            <span>Expert Assessment</span>
                        </div>
                        <div class="feature-item">
                            <i class="icon ion-ios-checkmark-circle"></i>
                            <span>Precise Quotation</span>
                        </div>
                    </div>

                    <a href="<?php echo $quote_config['button']['url']; ?>" 
                       class="btn btn-primary btn-quote">
                        <?php echo $quote_config['button']['text']; ?>
                        <i class="icon ion-ios-arrow-forward"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="certifications-wrapper">
                    <div class="certifications">
                        <?php foreach($quote_config['certifications'] as $cert): ?>
                        <div class="certification-item">
                            <div class="cert-inner">
                                <img src="<?php echo $cert['image']; ?>" 
                                     alt="<?php echo $cert['alt']; ?>" 
                                     class="img-fluid"
                                     loading="lazy">
                                <div class="certification-name">
                                    <?php echo $cert['alt']; ?>
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
