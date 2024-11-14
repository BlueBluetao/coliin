document.addEventListener('DOMContentLoaded', function() {
    // 加载header
    const headerContainer = document.getElementById('header-container');
    if (headerContainer) {
        fetch('./includes/header.html')
            .then(response => response.text())
            .then(data => {
                headerContainer.innerHTML = data;
                
                // 根据当前页面URL设置活动菜单项
                const currentPath = window.location.pathname;
                const menuItems = document.querySelectorAll('.menu-item');
                
                menuItems.forEach(item => {
                    const link = item.querySelector('a');
                    if (link && currentPath.includes(link.getAttribute('href'))) {
                        item.classList.add('current-menu-ancestor');
                        item.classList.add('current-menu-parent');
                    }
                });
            })
            .catch(error => console.error('Error loading header:', error));
    }

    // 加载footer
    const footerContainer = document.getElementById('footer-container');
    if (footerContainer) {
        fetch('./includes/footer.html')
            .then(response => response.text())
            .then(data => {
                footerContainer.innerHTML = data;
            })
            .catch(error => console.error('Error loading footer:', error));
    }
}); 