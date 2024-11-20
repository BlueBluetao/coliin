// 动画配置
const animationConfig = {
    enableLoading: true,
    enableScrollProgress: true,
    enableAOS: true,
    enableGSAP: true,
    enableCursorEffects: true
};

// 等待 jQuery 完全加载
window.addEventListener('load', function() {
    // 确保 jQuery 已加载
    if (typeof jQuery === 'undefined') {
        console.error('jQuery is not loaded');
        return;
    }

    // 使用 jQuery 的无冲突模式
    jQuery(function($) {
        // 初始化所有动画效果
        function initializeEffects() {
            // 初始化 AOS
            if(animationConfig.enableAOS && typeof AOS !== 'undefined') {
                AOS.init();
            }

            // 页面加载动画
            if(animationConfig.enableLoading) {
                setTimeout(function() {
                    $('.loading-overlay').fadeOut();
                }, 500);
            }

            // 滚动进度条
            if(animationConfig.enableScrollProgress) {
                $(window).scroll(function() {
                    let scrollPercent = ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
                    $('.scroll-progress').css('width', scrollPercent + '%');
                });
            }

            // 滚动显示动画
            function revealOnScroll() {
                $('.animated-element').each(function() {
                    if(isElementInViewport(this)) {
                        $(this).addClass('visible');
                    }
                });
            }

            // 检查元素是否在视口中
            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            // 鼠标跟随效果
            if(animationConfig.enableCursorEffects) {
                document.addEventListener('mousemove', function(e) {
                    const cursor = document.createElement('div');
                    cursor.className = 'cursor-trail';
                    cursor.style.left = e.pageX + 'px';
                    cursor.style.top = e.pageY + 'px';
                    document.body.appendChild(cursor);

                    setTimeout(() => {
                        cursor.remove();
                    }, 1000);
                });
            }

            // 3D倾斜效果
            $('.tilt-effect').on('mousemove', function(e) {
                const card = $(this);
                const cardRect = card[0].getBoundingClientRect();
                const cardCenterX = cardRect.left + cardRect.width / 2;
                const cardCenterY = cardRect.top + cardRect.height / 2;
                const angleX = (e.clientY - cardCenterY) / 30;
                const angleY = -(e.clientX - cardCenterX) / 30;
                
                card.css('transform', `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg)`);
            }).on('mouseleave', function() {
                $(this).css('transform', 'perspective(1000px) rotateX(0) rotateY(0)');
            });

            // 监听滚动事件
            $(window).scroll(revealOnScroll);
            $(window).resize(revealOnScroll);
            revealOnScroll();
        }

        // 初始化效果
        initializeEffects();
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const applicationItems = document.querySelectorAll('.application-item');
    const applicationImage = document.getElementById('application-image').querySelector('img');

    // 关闭其他打开的项目
    function closeOtherItems(currentItem) {
        applicationItems.forEach(item => {
            if (item !== currentItem && item.classList.contains('active')) {
                item.classList.remove('active');
                item.querySelector('.application-content').style.display = 'none';
            }
        });
    }

    applicationItems.forEach(item => {
        item.addEventListener('click', function() {
            // 关闭其他打开的项目
            closeOtherItems(this);

            // 切换当前项目的状态
            this.classList.toggle('active');
            
            // 获取图片信息
            const imagePath = this.getAttribute('data-image');
            const title = this.querySelector('h3').textContent.trim();

            // 切换图片
            if (applicationImage) {
                applicationImage.style.opacity = 0;
                setTimeout(() => {
                    applicationImage.src = imagePath;
                    applicationImage.alt = title;
                    applicationImage.style.opacity = 1;
                }, 300);
            }

            // 切换描述显示
            const content = this.querySelector('.application-content');
            if (content) {
                content.style.display = this.classList.contains('active') ? 'block' : 'none';
            }
        });
    });
}); 