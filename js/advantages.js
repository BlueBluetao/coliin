document.addEventListener('DOMContentLoaded', function() {
    // 视频弹窗控制
    const initVideoPopup = () => {
        const videoPlay = document.querySelector('.video-play');
        if (!videoPlay) return;

        videoPlay.addEventListener('click', function(e) {
            e.preventDefault();
            
            // 创建视频弹窗
            const popup = document.createElement('div');
            popup.className = 'video-popup';
            popup.innerHTML = `
                <div class="video-popup-overlay"></div>
                <div class="video-popup-content">
                    <button class="video-popup-close"><i class="icon ion-md-close"></i></button>
                    <div class="video-wrapper">
                        <video id="popup-video" controls>
                            <source src="videos/manufacturing-process.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            `;
            
            document.body.appendChild(popup);
            document.body.style.overflow = 'hidden';
            
            // 自动播放视频
            const video = document.getElementById('popup-video');
            video.play();
            
            // 关闭弹窗
            const closePopup = () => {
                video.pause();
                document.body.removeChild(popup);
                document.body.style.overflow = '';
            };
            
            popup.querySelector('.video-popup-close').addEventListener('click', closePopup);
            popup.querySelector('.video-popup-overlay').addEventListener('click', closePopup);
        });
    };

    // 初始化视频弹窗
    initVideoPopup();

    // 数字动画
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.target.classList.contains('counter')) {
                const element = entry.target;
                const target = parseFloat(element.textContent);
                const duration = 2000;
                const step = target / duration * 10;
                let current = 0;
                
                const timer = setInterval(() => {
                    current += step;
                    if(current >= target) {
                        element.textContent = target;
                        clearInterval(timer);
                    } else {
                        element.textContent = current.toFixed(3);
                    }
                }, 10);
                observer.unobserve(entry.target);
            }
        });
    });

    // 观察计数器元素
    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => observer.observe(counter));
}); 