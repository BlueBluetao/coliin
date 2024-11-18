<?php
/**
 * Quote Section Component
 * @param string $quote_title - 报价标题
 * @param string $quote_description - 报价描述
 */

// 设置默认值
$quote_title = $quote_title ?? '让我们了解您的需求';
$quote_description = $quote_description ?? '专业的制造解决方案';

// 通用的报价组件配置
$quote_config = [
    'button' => [
        'text' => '获取报价',
        'url' => 'get-a-quote.php'
    ],
    'certifications' => [
        [
            'image' => 'images/itar.png',
            'alt' => 'ITAR认证'
        ],
        [
            'image' => 'images/iso.png',
            'alt' => 'ISO认证'
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
                    <span class="text-primary quote-tag">获取报价</span>
                    <h2 class="quote-title"><?php echo $quote_title; ?></h2>
                    <p class="quote-description"><?php echo $quote_description; ?></p>
                    
                    <div class="quote-features">
                        <div class="feature-item">
                            <i class="icon ion-ios-checkmark-circle"></i>
                            <span>快速响应</span>
                        </div>
                        <div class="feature-item">
                            <i class="icon ion-ios-checkmark-circle"></i>
                            <span>专业评估</span>
                        </div>
                        <div class="feature-item">
                            <i class="icon ion-ios-checkmark-circle"></i>
                            <span>精准报价</span>
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
