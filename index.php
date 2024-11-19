<?php 
require_once 'config/config.php';
require_once 'config/index_config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<div class="slider" data-show="1" data-arrow="true">
    <?php foreach ($slider_data as $slider): ?>
    <div>
        <div class="slider-item">
            <img src="<?php echo $slider['image']; ?>" alt="" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slider-content">
                            <h4><?php echo $slider['subtitle']; ?></h4>
                            <h1><?php echo $slider['title']; ?></h1>
                            <a class="btn btn-primary" href="<?php echo $slider['button']['link']; ?>"><?php echo $slider['button']['text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<section class="no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">OUR SERVICES</h4>
                <h2>What we do</h2>
                <div class="coliin-space-30"></div>

                <div class="services-block-left">
                    <div class="services-slider-img-left">
                        <img src="images/services-solution.png" alt="">
                    </div>
                </div>

                <div class="services-slider" data-show="3" data-arrow="true">
                    <?php foreach ($services_data as $service): ?>
                    <div class="services-item">
                        <div class="services-box">
                            <div class="services-icon">
                                <img src="<?php echo $service['icon']; ?>" alt="">
                            </div>
                            <div class="services-content">
                                <h3><a href="<?php echo $service['link']; ?>"><?php echo $service['title']; ?></a></h3>
                                <p><?php echo $service['description']; ?></p>
                                <a class="view-detail" href="#">View details<i class="icon ion-md-add-circle-outline"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="coliin-space-90"></div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">
                    <?php foreach ($partners_data as $partner): ?>
                    <div>
                        <div class="partner-item text-center clearfix">
                            <div class="inner">
                                <div class="thumb">
                                    <img src="<?php echo $partner['logo']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="coliin-space"></div>
        <hr>
        <div class="coliin-space"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo $form_config['title']; ?></h3>
                <p><?php echo $form_config['description']; ?></p>
            </div>
        </div>
        <div class="coliin-space-30"></div>
        <form class="home-form" method="post" action="">
            <div class="row">
                <?php foreach ($form_config['fields'] as $field): ?>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="<?php echo $field['type']; ?>" 
                               name="<?php echo $field['name']; ?>" 
                               class="form-control" 
                               id="<?php echo $field['name']; ?>" 
                               placeholder="<?php echo $field['placeholder']; ?>" 
                               <?php echo $field['required'] ? 'required' : ''; ?>>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="col-md-3">
                    <div class="form-group">
                        <button type="submit" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-full-width">
                            <?php echo $form_config['submit_button']['text']; ?> 
                            <i class="<?php echo $form_config['submit_button']['icon']; ?>"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<section style="background-image: url('images/bg-1.jpg');">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-8">
                <h4 class="text-primary"><?php echo $featured_project_config['subtitle']; ?></h4>
                <h2 class="text-white no-margin-bottom"><?php echo $featured_project_config['title']; ?></h2>
            </div>
            <div class="col-md-4 text-right align-self-end">
                <a class="text-white coliin-lineheight" href="<?php echo $featured_project_config['view_all_link']['url']; ?>">
                    <?php echo $featured_project_config['view_all_link']['text']; ?> 
                    <i class="icon ion-md-add-circle-outline"></i>
                </a>
            </div>
        </div>
        <div class="coliin-space-20"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="project-feature-slider project-feature" data-show="3" data-arrow="true">
                    <?php foreach ($projects_data as $project): ?>
                    <div class="project-item col-lg-4 col-sm-6">
                        <div class="inner">
                            <img src="<?php echo $project['image']; ?>" alt=""> 
                            <div class="project-info">
                                <div class="project-meta"><?php echo $project['meta']; ?></div>
                                <div class="project-content">
                                    <h3><a href="<?php echo $project['link']; ?>"><?php echo $project['title']; ?></a></h3>
                                    <p><?php echo $project['description']; ?></p>
                                    <a href="<?php echo $project['link']; ?>">View details <i class="icon ion-md-add-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="coliin-space-90"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <h3 class="text-white">Our work process</h3>
            </div>
            <div class="col-md-9">
                <p class="text-white border-left"><?php echo $work_process_description; ?></p>
            </div>
        </div>
        <div class="coliin-space"></div>

        <div class="row">
            <?php foreach ($work_process_data as $process): ?>
            <div class="col-md-3">
                <div class="process process-light">
                    <div class="process-icon"><i class="<?php echo $process['icon']; ?>"></i></div>
                    <h4><?php echo $process['title']; ?></h4>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?> 