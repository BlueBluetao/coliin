<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get a Quote</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ionicon.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .quote-container {
            max-width: 800px;
            margin: 60px auto;
            padding: 40px;
            background: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            border-radius: 8px;
        }

        .quote-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .quote-header h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        .quote-header p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

        .upload-area {
            border: 2px dashed #e0e0e0;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            background: #fafafa;
            cursor: pointer;
            transition: all 0.25s ease;
            position: relative;
        }

        .upload-area:hover {
            border-color: #007bff;
            background: #f0f7ff;
        }

        .upload-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .upload-text {
            color: #666;
            margin-bottom: 10px;
        }

        .upload-hint {
            font-size: 12px;
            color: #999;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-control {
            height: 48px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            padding: 0 15px;
        }

        .btn-quote {
            height: 48px;
            font-size: 16px;
            font-weight: 500;
            width: 100%;
            margin-top: 15px;
        }

        .terms-text {
            text-align: center;
            font-size: 13px;
            color: #666;
            margin-top: 20px;
        }

        .terms-text a {
            color: #007bff;
            text-decoration: none;
        }

        .file-types {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
            flex-wrap: wrap;
        }

        .file-type {
            padding: 4px 12px;
            background: #f0f0f0;
            border-radius: 4px;
            font-size: 13px;
            color: #666;
        }

        .upload-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 4px;
            background: #007bff;
            width: 0;
            transition: width 0.3s ease;
        }

        .uploaded-files {
            margin-top: 20px;
            display: none;
        }

        .uploaded-file {
            display: flex;
            align-items: center;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 4px;
            margin-bottom: 8px;
        }

        .file-icon {
            margin-right: 10px;
            color: #28a745;
        }

        .file-name {
            flex-grow: 1;
            font-size: 14px;
        }

        .file-size {
            color: #6c757d;
            font-size: 12px;
            margin-left: 10px;
        }

        .upload-success {
            color: #28a745;
            display: none;
            text-align: center;
            margin-top: 10px;
            padding: 10px;
            background: #d4edda;
            border-radius: 4px;
        }

        .dragover {
            border-color: #28a745;
            background: #e8f5e9;
        }

        .form-error {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }

        .error-message {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
            display: none;
        }

        .form-group {
            position: relative;
        }

        .form-control.error {
            border-color: #dc3545;
        }

        .files-error {
            color: #dc3545;
            text-align: center;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body class="bg-light">
    <div class="quote-container">
        <div class="quote-header">
            <h1>Access a massive menu of manufacturing processes, materials, and finishes</h1>
            <p>Get instant pricing, project lead times, and DFM feedback</p>
        </div>

        <form class="quote-form" method="post" action="submit-quote.php" enctype="multipart/form-data">
            <div class="upload-area" id="dropZone">
                <div class="upload-icon">
                    <i class="icon ion-md-cloud-upload"></i>
                </div>
                <div class="upload-text">Drag and drop your 3D files here</div>
                <div class="file-types">
                    <span class="file-type">STEP</span>
                    <span class="file-type">STL</span>
                    <span class="file-type">SLDPRT</span>
                    <span class="file-type">DXF</span>
                    <span class="file-type">IPT</span>
                    <span class="file-type">X_T</span>
                    <span class="file-type">3DXML</span>
                </div>
                <div class="upload-hint">Maximum file size: 50MB</div>
                <input type="file" id="fileInput" name="files[]" multiple accept=".step,.stp,.stl,.sldprt,.dxf,.ipt,.x_t,.3dxml" style="display: none">
                <div class="upload-progress"></div>
            </div>
            <div class="files-error" id="filesError">Please upload at least one file</div>
            <div class="uploaded-files" id="uploadedFiles">
                <!-- 上传的文件将在这里显示 -->
            </div>
            <div class="upload-success" id="uploadSuccess">
                <i class="icon ion-md-checkmark-circle"></i> Files uploaded successfully!
            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                <div class="error-message" id="emailError">Please enter a valid email address</div>
            </div>

            <div class="form-group">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                <div class="error-message" id="phoneError">Please enter your phone number</div>
            </div>

            <button type="submit" class="btn btn-primary btn-quote">Start Your Instant Quote</button>

            <div class="terms-text">
                Your files are secure and confidential.<br>
                <!-- By continuing, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> -->
            </div>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        const dropZone = document.getElementById('dropZone');
        const fileInput = document.getElementById('fileInput');
        const progressBar = document.querySelector('.upload-progress');
        const uploadedFilesContainer = document.getElementById('uploadedFiles');
        const uploadSuccess = document.getElementById('uploadSuccess');
        const form = document.querySelector('.quote-form');

        // 存储已上传的文件
        let uploadedFiles = [];

        // 文件类型验证
        const allowedTypes = ['.step', '.stp', '.stl', '.sldprt', '.dxf', '.ipt', '.x_t', '.3dxml'];

        function validateFile(file) {
            const extension = '.' + file.name.split('.').pop().toLowerCase();
            return allowedTypes.includes(extension);
        }

        // 表单验证
        function validateForm() {
            const email = document.getElementById('email');
            const phone = document.getElementById('phone');
            const emailError = document.getElementById('emailError');
            const phoneError = document.getElementById('phoneError');
            const filesError = document.getElementById('filesError');
            let isValid = true;

            // 重置所有错误状态
            email.classList.remove('error');
            phone.classList.remove('error');
            emailError.style.display = 'none';
            phoneError.style.display = 'none';
            filesError.style.display = 'none';

            // 验证邮箱
            if (!email.value || !email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                email.classList.add('error');
                emailError.style.display = 'block';
                isValid = false;
            }

            // 验证电话
            if (!phone.value || phone.value.length < 5) {
                phone.classList.add('error');
                phoneError.style.display = 'block';
                isValid = false;
            }

            // 验证文件
            if (uploadedFiles.length === 0) {
                filesError.style.display = 'block';
                isValid = false;
            }

            return isValid;
        }

        // 显示表单错误
        function showFormErrors(errors) {
            Object.keys(errors).forEach(field => {
                const errorElement = document.querySelector(`#${field}Error`);
                if (errorElement) {
                    errorElement.textContent = errors[field];
                    errorElement.style.display = errors[field] ? 'block' : 'none';
                }
            });
        }

        // 文件大小格式化
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        // 添加文件到列表
        function addFileToList(file) {
            const fileElement = document.createElement('div');
            fileElement.className = 'uploaded-file';
            fileElement.innerHTML = `
                <i class="icon ion-md-document file-icon"></i>
                <span class="file-name">${file.name}</span>
                <span class="file-size">${formatFileSize(file.size)}</span>
                <i class="icon ion-md-close" onclick="removeFile('${file.name}')" style="cursor: pointer; margin-left: 10px;"></i>
            `;
            uploadedFilesContainer.appendChild(fileElement);
            uploadedFilesContainer.style.display = 'block';
        }

        // 移除文件
        function removeFile(fileName) {
            uploadedFiles = uploadedFiles.filter(file => file.name !== fileName);
            updateFileList();
        }

        // 更新文件列表显示
        function updateFileList() {
            uploadedFilesContainer.innerHTML = '';
            uploadedFiles.forEach(file => addFileToList(file));
            uploadedFilesContainer.style.display = uploadedFiles.length > 0 ? 'block' : 'none';
        }

        // 处理文件上传
        async function handleFiles(files) {
            for (const file of Array.from(files)) {
                if (!validateFile(file)) {
                    alert(`File ${file.name} is not supported. Please upload valid 3D file formats.`);
                    continue;
                }
                if (file.size > 50 * 1024 * 1024) {
                    alert(`File ${file.name} exceeds the 50MB size limit`);
                    continue;
                }

                // 检查文件是否已存在
                const fileExists = uploadedFiles.some(f => 
                    f.name === file.name && 
                    f.size === file.size
                );

                if (fileExists) {
                    alert(`File ${file.name} has already been added`);
                    continue;
                }

                // 显示上传进度
                let progress = 0;
                const interval = setInterval(() => {
                    progress += 5;
                    progressBar.style.width = `${progress}%`;
                    if (progress >= 100) {
                        clearInterval(interval);
                        setTimeout(() => {
                            progressBar.style.width = '0';
                            // 只在这里添加文件到uploadedFiles数组
                            if (!uploadedFiles.some(f => f.name === file.name)) {
                                uploadedFiles.push(file);
                                updateFileList();
                            }
                        }, 500);
                    }
                }, 100);
            }
        }

        dropZone.addEventListener('click', () => fileInput.click());

        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.classList.add('dragover');
        });

        dropZone.addEventListener('dragleave', (e) => {
            e.preventDefault();
            dropZone.classList.remove('dragover');
        });

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.classList.remove('dragover');
            handleFiles(e.dataTransfer.files);
        });

        fileInput.addEventListener('change', (e) => {
            handleFiles(e.target.files);
        });

        // 表单提交处理
        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            if (!validateForm()) {
                return;
            }

            const formData = new FormData();
            
            // 添加基本表单数据
            formData.append('email', document.getElementById('email').value);
            formData.append('phone', document.getElementById('phone').value);
            
            // 只添加uploadedFiles中的文件
            uploadedFiles.forEach((file, index) => {
                formData.append(`files[${index}]`, file);
            });
            
            try {
                const submitButton = this.querySelector('button[type="submit"]');
                const originalText = submitButton.innerHTML;
                submitButton.disabled = true;
                submitButton.innerHTML = 'Submitting...';
                
                const response = await fetch('submit-quote.php', {
                    method: 'POST',
                    body: formData
                });
                
                const result = await response.json();
                
                if (result.success) {
                    uploadSuccess.style.display = 'block';
                    form.reset();
                    uploadedFiles = [];
                    updateFileList();
                    setTimeout(() => {
                        uploadSuccess.style.display = 'none';
                    }, 5000);
                } else {
                    alert('Error: ' + result.message);
                }
                
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
            } catch (error) {
                alert('An error occurred while submitting the form');
                console.error('Error:', error);
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
            }
        });

        // 添加实时验证
        document.getElementById('email').addEventListener('input', function() {
            if (this.value && this.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                this.classList.remove('error');
                document.getElementById('emailError').style.display = 'none';
            }
        });

        document.getElementById('phone').addEventListener('input', function() {
            if (this.value && this.value.length >= 5) {
                this.classList.remove('error');
                document.getElementById('phoneError').style.display = 'none';
            }
        });
    </script>
</body>
</html> 