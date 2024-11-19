document.addEventListener('DOMContentLoaded', function() {
    // 统一处理所有需要动画的元素
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // 添加动画类
                entry.target.classList.add('active');
                
                // 如果是计数器元素，启动计数动画
                if (entry.target.querySelector('.counter')) {
                    const counter = entry.target.querySelector('.counter');
                    if (!counter.classList.contains('counted')) {
                        startCounting(counter);
                        counter.classList.add('counted');
                    }
                }
            }
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px'
    });
    
    // 观察所有需要动画的元素
    animateElements.forEach(element => {
        observer.observe(element);
    });
    
    // 计数动画函数
    function startCounting(element) {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        
        function updateCounter() {
            current += step;
            if (current < target) {
                element.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        }
        
        updateCounter();
    }
}); 