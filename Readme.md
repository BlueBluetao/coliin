# Coliin 工业解决方案网站操作手册

## 目录

- [1. 项目概述](#1-项目概述)
- [2. 基础配置](#2-基础配置)
- [3. 图片配置指南](#3-图片配置指南)
- [4. 模块配置指南](#4-模块配置指南)
- [5. 样式配置](#5-样式配置)
- [6. 开发指南](#6-开发指南)
- [7. 注意事项](#7-注意事项)

## 1. 项目概述

### 1.1 项目介绍

这是一个工业解决方案展示网站，主要展示以下内容：

- 工业解决方案
- 供应链管理服务 
- 技术优势
- 创新能力
- 公司信息

### 1.2 技术栈

- 前端: HTML5, CSS3, JavaScript, jQuery
- 后端: PHP
- 数据库: MySQL
- 依赖库: 
  - Slick Slider
  - Font Awesome
  - Ionicons

### 1.3 目录结构
project/
├── config/ # 配置文件
├── css/ # 样式文件
├── images/ # 图片资源
├── includes/ # 公共组件
├── js/ # JavaScript文件
└── index.php # 入口文件


## 2. 基础配置

### 2.1 网站基本信息配置

在 `config/config.php` 中配置网站基础信息：


php
// 网站基础配置
define('SITE_NAME', 'Coliin');
define('SITE_URL', 'http://localhost:8081');
define('COMPANY_ADDRESS', 'Shanghai, China');
define('COMPANY_PHONE', '+86 21 59186319');
define('COMPANY_EMAIL', 'Sales@coliin.com');
define('COMPANY_LOGO', 'images/logo-test.png');


### 2.2 导航菜单配置

在 `config/config.php` 中配置主导航菜单：
php
$main_menu = [
[
'title' => 'Home',
'url' => 'index.php',
'current' => true
],
[
'title' => 'Solutions',
'url' => 'solutions.php',
'submenu' => [
['title' => 'Key Cutting', 'url' => 'key-cutting.php'],
['title' => 'Auto Tools', 'url' => 'automotive-tools.php'],
// ... 其他子菜单项
]
],
// ... 其他菜单项
];


## 3. 图片配置指南

### 3.1 图片存放规范

所有图片按以下规则存放在 `images` 目录下:
images/
├── slider/ # 首页轮播图
├── services-icon/ # 服务图标
├── solutions/ # 解决方案相关图片
├── clients/ # 客户logo
└── bg/ # 背景图片


### 3.2 图片尺寸规范

| 用途 | 尺寸 | 格式 | 大小限制 |
|------|------|------|----------|
| 首页轮播图 | 1920x450px | JPG | <300KB |
| 服务图标 | 80x80px | PNG/SVG | <20KB |
| 解决方案缩略图 | 600x400px | JPG | <100KB |
| 客户logo | 200x60px | PNG | <30KB |
| 背景图片 | 1920x1080px | JPG | <500KB |

### 3.3 图片引用方式

使用 `asset_url()` 函数引用图片:

php
// 正确方式
<img src="<?php echo asset_url('images/slider/slider-1.jpg'); ?>" alt="Slider">
// 错误方式
<img src="images/slider/slider-1.jpg" alt="Slider">

### 3.4 图片优化建议

1. 使用适当的图片格式
   - JPG: 照片类图片
   - PNG: 需要透明背景的图片
   - SVG: 图标类图片

2. 图片压缩
   - 使用 TinyPNG 等工具进行压缩
   - 保持适当的压缩比例，确保图片质量

3. 响应式图片
   - 使用 srcset 属性提供多个尺寸
   - 考虑移动端加载优化

## 4. 模块配置指南

### 4.1 首页配置

在 `config/index_config.php` 中配置:
```php
// 轮播图配置
$slider_data = [
    [
        'image' => asset_url('images/slider/1.jpg'),
        'title' => 'Industrial Solutions',
        'subtitle' => 'Advanced Manufacturing'
    ],
    // ... 其他轮播项
];

// 服务模块配置
$services_data = [
    [
        'icon' => 'icon-gear',
        'title' => 'CNC Machining',
        'description' => '...'
    ],
    // ... 其他服务项
];
```

### 4.2 解决方案页面配置

每个解决方案模块都有独立的配置文件:

1. 3D打印 (`config/3d_printing_config.php`):
```php
$printing_config = [
    'page_title' => '3D Printing Solutions',
    'features' => [
        'High Precision',
        'Rapid Prototyping',
        'Custom Solutions'
    ],
    // ... 其他配置
];
```

2. 模具 (`config/mold_config.php`)
3. 钣金 (`config/sheet_metal_config.php`)
4. 汽车工具 (`config/auto_tools_config.php`)

## 5. 样式配置

### 5.1 主题颜色配置

在 `css/style.css` 中配置:

```css
:root {
    --primary-color: #2a4b9b;
    --secondary-color: #ffd100;
    --text-color: #333333;
    --light-bg: #f8f9fa;
}
```

### 5.2 响应式布局配置

响应式断点设置:

```css
/* 桌面端 */
@media (min-width: 992px) {
    /* 样式配置 */
}

/* 平板端 */
@media (min-width: 768px) and (max-width: 991px) {
    /* 样式配置 */
}

/* 移动端 */
@media (max-width: 767px) {
    /* 样式配置 */
}
```

## 6. 开发指南

### 6.1 新增页面流程

1. 创建页面文件
2. 添加配置文件
3. 更新导航菜单
4. 添加样式文件
5. 添加必要的JavaScript

### 6.2 组件开发规范

1. 组件文件命名: `component-name.php`
2. 样式文件命名: `component-name.css`
3. JavaScript文件命名: `component-name.js`

### 6.3 代码规范

1. PHP代码规范
   - 使用 PSR-4 自动加载规范
   - 类名使用大驼峰命名
   - 方法名使用小驼峰命名

2. CSS代码规范
   - 使用 BEM 命名规范
   - 模块化组织样式
   - 避免过深的选择器嵌套

3. JavaScript代码规范
   - 使用 ES6+ 语法
   - 模块化组织代码
   - 使用适当的注释

## 7. 注意事项

### 7.1 性能优化

1. 图片优化
   - 使用适当的图片格式
   - 压缩图片大小
   - 使用懒加载

2. 代码优化
   - 压缩CSS和JavaScript文件
   - 合并小文件
   - 使用浏览器缓存

### 7.2 安全注意事项

1. 文件上传
   - 限制文件类型
   - 限制文件大小
   - 重命名文件

2. 表单提交
   - 验证输入数据
   - 防止XSS攻击
   - 使用CSRF令牌

### 7.3 维护更新

1. 版本控制
   - 使用Git管理代码
   - 遵循语义化版本规范
   - 保持更新日志

2. 备份策略
   - 定期备份数据库
   - 备份上传的文件
   - 保存配置文件

3. 更新流程
   - 在测试环境验证
   - 备份生产环境
   - 按步骤更新

## 8. 常见问题解答

### 8.1 图片相关

Q: 如何更新缓存的图片？
A: 更新 `config/config.php` 中的 `ASSETS_VERSION` 值。

Q: 上传图片失败怎么办？
A: 检查文件权限和PHP上传配置。

### 8.2 配置相关

Q: 修改配置后不生效？
A: 清除浏览器缓存和服务器缓存。


## 9. 联系与支持

- 文档更新日期: 2024-01-02
- 版本号: v1.0.0

## 服务器相关

外网面板地址: https://47.243.206.120:8888/cd6785fa
内网面板地址: https://172.22.255.21:8888/cd6785fa
username: user
password: baotalpGFubW