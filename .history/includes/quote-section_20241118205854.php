<?php
/**
 * Quote Section Component
 * @param string $quote_title - 报价标题
 * @param string $quote_description - 报价描述
 */

// 设置默认值
$quote_title = $quote_title ?? 'Let us know what you need';
$quote_description = $quote_description ?? 'Professional manufacturing solutions';

// 通用的报价组件配置
$quote_config = [
    'button' => [
        'text' => 'Get a Quote',
        'url' => 'get-a-quote.php'
    ],
    'certifications' => [
        [
            'image' => 'images/itar.png',
            'alt' => 'ITAR Registered'
        ],
        [
            'image' => 'images/iso.png',
            'alt' => 'ISO Certified'
        ]
    ]
];
?>

<!-- Quote Section -->
<section class="quote-section">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">QUOTE</h4>
                    <h2><?php echo $quote_title; ?></h2>
                    <p><?php echo $quote_description; ?></p>
                    <a href="<?php echo $quote_config['button']['url']; ?>" class="btn btn-primary">
                        <?php echo $quote_config['button']['text']; ?>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
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
