<footer id="site-footer" class="site-footer bg-footer">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <h4 class="text-white">COMPANY</h4>
                        <ul class="list-items">
                            <li><a href="about-company.php">About Us</a></li>
                            <li><a href="business.php">Business</a></li>
                            <li><a href="clients.php">Clients</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <h4 class="text-white">SOLUTIONS</h4>
                        <ul class="list-items">
                            <?php foreach($solutions_data['manufacturing']['solutions'] as $label => $link): ?>
                                <li><a href="<?php echo $label; ?>.php"><?php echo $label; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <h4 class="text-white">CONTACT</h4>
                        <ul class="footer-contact">
                            <li><i class="icon ion-md-pin"></i><?php echo COMPANY_ADDRESS; ?></li>
                            <li><i class="icon ion-md-call"></i><?php echo COMPANY_PHONE; ?></li>
                            <li><i class="icon ion-md-mail"></i><?php echo COMPANY_EMAIL; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <h4 class="text-white">FOLLOW US</h4>
                        <div class="social-list">
                            <a href="#"><i class="icon ion-logo-facebook"></i></a>
                            <a href="#"><i class="icon ion-logo-twitter"></i></a>
                            <a href="#"><i class="icon ion-logo-linkedin"></i></a>
                            <a href="#"><i class="icon ion-logo-instagram"></i></a>
                        </div>
                        <p class="mt-3">Connect with us on social media</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright text-center">
                Copyright © <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All Rights Reserved.
            </div>
        </div>
    </div>
    <div id="back-to-top" class="back-to-top">
        <i class="icon ion-ios-settings"></i>
    </div>
</footer>

<!-- 首先加载jQuery -->
<script src='js/jquery.min.js'></script>

<!-- 然后是其他依赖jQuery的库 -->
<script src='js/slick.min.js'></script>
<script src='js/jquery.sticky.js'></script>
<script src='js/countto.min.js'></script>
<script src='js/jquery.magnific-popup.min.js'></script>
<script src='js/jquery.isotope.min.js'></script>
<script src='js/scripts.js'></script>

<!-- 动画相关JS库 -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>

<!-- 添加 main.js -->
<script src='js/main.js'></script>

</body>
</html> 