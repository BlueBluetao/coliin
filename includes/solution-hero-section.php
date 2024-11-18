<?php
/**
 * Solution Hero Section Component
 * @param string $page_title - 页面标题
 * @param array $breadcrumbs - 面包屑导航数组
 * @param string $background - 背景图片路径 (可选)
 */

// 设置默认值
$page_title = $page_title ?? 'Page Title';
$breadcrumbs = $breadcrumbs ?? [['title' => 'Home', 'link' => 'index.php']];
$background = $background ?? 'images/solutions/solution.png';
?>

<!-- Solution Hero Section -->
<section class="page-header" style="background: url('<?php echo $background; ?>') no-repeat center center;">
    <div class="container">
        <div class="breadc-box no-line">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title"><?php echo $page_title; ?></h2>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <?php foreach($breadcrumbs as $index => $item): ?>
                            <li>
                                <?php if(isset($item['link'])): ?>
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a>
                                <?php else: ?>
                                    <span class="active"><?php echo $item['title']; ?></span>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> 