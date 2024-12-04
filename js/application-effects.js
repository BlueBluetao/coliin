document.addEventListener('DOMContentLoaded', function() {
    const applicationItems = document.querySelectorAll('.application-item');
    const applicationImage = document.querySelector('#application-image img');
    
    // 初始化第一张图片
    applicationImage.classList.add('active');
    
    applicationItems.forEach(item => {
        item.addEventListener('click', function() {
            const newImageSrc = this.dataset.image;
            
            // 如果点击的是当前图片，不做任何操作
            if (applicationImage.src.includes(newImageSrc)) return;
            
            // 移除旧图片
            applicationImage.classList.remove('active');
            
            // 设置延时以等待淡出动画完成
            setTimeout(() => {
                // 更换图片源
                applicationImage.src = newImageSrc;
                // 添加新的动画类
                applicationImage.classList.add('active');
            }, 300);
            
            // 更新选中状态
            applicationItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
        
        // 添加鼠标悬停效果
        item.addEventListener('mouseenter', function() {
            const newImageSrc = this.dataset.image;
            applicationImage.classList.remove('active');
            
            setTimeout(() => {
                applicationImage.src = newImageSrc;
                applicationImage.classList.add('active');
            }, 300);
        });
    });
}); 