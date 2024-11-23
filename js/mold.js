document.addEventListener('DOMContentLoaded', function() {
    const scroll = document.querySelector('.application-scroll');
    const prevBtn = document.querySelector('.nav-btn.prev');
    const nextBtn = document.querySelector('.nav-btn.next');
    
    const scrollAmount = 300 + 30; // card width + gap
    
    function updateButtons() {
        prevBtn.disabled = scroll.scrollLeft <= 0;
        nextBtn.disabled = scroll.scrollLeft >= scroll.scrollWidth - scroll.clientWidth;
    }
    
    // 初始化按钮状态
    updateButtons();
    
    // 点击事件
    nextBtn.addEventListener('click', () => {
        scroll.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
    
    prevBtn.addEventListener('click', () => {
        scroll.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });
    
    // 监听滚动更新按钮状态
    scroll.addEventListener('scroll', updateButtons);
    
    // 窗口大小改变时更新按钮状态
    window.addEventListener('resize', updateButtons);
}); 