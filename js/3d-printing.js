document.addEventListener('DOMContentLoaded', function() {
    // 材料卡片动画效果
    const materialCards = document.querySelectorAll('.material-solution-card');
    
    materialCards.forEach(card => {
        // 添加鼠标进入动画
        card.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s ease';
        });
        
        // 添加图片加载错误处理
        const img = card.querySelector('img');
        img.addEventListener('error', function() {
            this.src = 'images/solutions/solution_demo.jpg';
        });
    });
}); 