// 数字动画函数
class NumberAnimation {
    constructor() {
        this.animatedElements = [];
        this.options = {
            threshold: 0.2
        };
        
        this.observer = new IntersectionObserver(this.handleIntersection.bind(this), this.options);
        this.init();
    }

    init() {
        // 获取所有需要动画的元素
        const elements = document.querySelectorAll('.animate-number');
        elements.forEach(element => {
            // 初始化数值
            element.dataset.target = element.textContent;
            element.textContent = '0';
            // 添加到观察列表
            this.observer.observe(element);
            this.animatedElements.push(element);
        });
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('visible')) {
                this.animateNumber(entry.target);
                entry.target.classList.add('visible');
            }
        });
    }

    animateNumber(element) {
        const target = parseFloat(element.dataset.target.replace(/[^0-9.-]/g, ''));
        const suffix = element.dataset.target.replace(/[0-9.-]/g, '');
        const duration = 2000; // 动画持续时间（毫秒）
        const steps = 60; // 动画步数
        const stepValue = target / steps;
        let current = 0;
        let step = 0;

        const updateNumber = () => {
            step++;
            current = stepValue * step;
            
            if (step <= steps) {
                // 处理小数和整数的显示
                const displayNumber = Number.isInteger(target) ? 
                    Math.round(current) : 
                    current.toFixed(1);
                
                element.textContent = displayNumber + suffix;
                requestAnimationFrame(updateNumber);
            } else {
                // 确保最终显示正确的目标值
                element.textContent = element.dataset.target;
            }
        };

        requestAnimationFrame(updateNumber);
    }
}

// 页面加载完成后初始化动画
document.addEventListener('DOMContentLoaded', () => {
    new NumberAnimation();
}); 