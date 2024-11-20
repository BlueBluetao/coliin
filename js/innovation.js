document.addEventListener('DOMContentLoaded', function() {
    // 滚动动画
    const processSteps = document.querySelectorAll('.process-step');
    
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);
    
    processSteps.forEach(step => {
        observer.observe(step);
    });
    
    // 点击展开详情
    processSteps.forEach(step => {
        step.addEventListener('click', function() {
            processSteps.forEach(s => s.classList.remove('active'));
            this.classList.add('active');
        });
    });
}); 