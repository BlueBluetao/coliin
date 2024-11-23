<?php
require_once 'config/config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

// 初始化响应
$response = [
    'success' => false,
    'message' => '',
    'files' => [],
    'data' => []
];

try {
    // 1. 基础请求验证
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    // 2. 验证Content-Type
    if (!isset($_SERVER['CONTENT_TYPE']) || 
        strpos($_SERVER['CONTENT_TYPE'], 'multipart/form-data') === false) {
        throw new Exception('Invalid content type');
    }

    // 3. 文件上传验证
    if (!isset($_FILES['files']) || empty($_FILES['files'])) {
        throw new Exception('No files uploaded');
    }

    // 4. 文件上传错误检查
    if ($_FILES['files']['error'][0] === UPLOAD_ERR_INI_SIZE) {
        throw new Exception('File size exceeds server limit');
    }

    // 5. 表单数据验证
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $phone = $_POST['phone'] ?? '';

    if (!$email) {
        throw new Exception('Invalid email address');
    }

    if (empty($phone) || strlen($phone) < 5) {
        throw new Exception('Invalid phone number');
    }

    // 6. 定义允许的文件类型
    $allowedTypes = [
        'step' => 'application/step',
        'stp' => 'application/step',
        'stl' => 'application/vnd.ms-pki.stl',
        'sldprt' => 'application/sldprt',
        'dxf' => 'application/dxf',
        'ipt' => 'application/ipt',
        'x_t' => 'application/x_t',
        '3dxml' => 'application/3dxml'
    ];

    // 7. 验证上传目录
    $uploadDir = 'file_uploads/';
    if (!file_exists($uploadDir)) {
        if (!mkdir($uploadDir, 0777, true)) {
            throw new Exception('Failed to create upload directory');
        }
    }

    if (!is_writable($uploadDir)) {
        throw new Exception('Upload directory is not writable');
    }

    // 8. 数据库连接
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        )
    );

    // 9. 开始事务
    $pdo->beginTransaction();

    // 10. 保存用户信息
    $stmt = $pdo->prepare("INSERT INTO quotes (email, phone, status) VALUES (?, ?, 'pending')");
    $stmt->execute([$email, $phone]);
    $quoteId = $pdo->lastInsertId();

    // 11. 处理文件上传
    $files = $_FILES['files'];
    $uploadedFiles = [];

    // 标准化文件数组
    if (!is_array($files['name'])) {
        $files = array_map(function($item) { return [$item]; }, $files);
    }

    // 12. 文件处理循环
    foreach ($files['name'] as $i => $fileName) {
        // 跳过空文件
        if (empty($fileName)) continue;

        // 文件基础检查
        if ($files['error'][$i] !== UPLOAD_ERR_OK) {
            throw new Exception("Error uploading file: $fileName");
        }

        // 文件大小检查 (50MB)
        if ($files['size'][$i] > 50 * 1024 * 1024) {
            throw new Exception("File $fileName exceeds size limit (50MB)");
        }

        // 文件类型检查
        $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (!array_key_exists($extension, $allowedTypes)) {
            throw new Exception("File type .$extension is not allowed");
        }

        // 文件名安全处理
        $newFileName = uniqid('file_', true) . '_' . preg_replace('/[^a-zA-Z0-9\.]/', '_', $fileName);
        $uploadPath = $uploadDir . $newFileName;

        // 验证文件是否是真实的上传文件
        if (!is_uploaded_file($files['tmp_name'][$i])) {
            throw new Exception("Invalid file upload attempt");
        }

        // 移动文件
        if (!move_uploaded_file($files['tmp_name'][$i], $uploadPath)) {
            throw new Exception("Failed to save file: $fileName");
        }

        // 验证文件是否成功保存
        if (!file_exists($uploadPath)) {
            throw new Exception("File save verification failed");
        }

        // 保存文件记录
        $stmt = $pdo->prepare("
            INSERT INTO quote_files (quote_id, original_name, saved_name, size) 
            VALUES (?, ?, ?, ?)
        ");
        $stmt->execute([$quoteId, $fileName, $newFileName, $files['size'][$i]]);

        $uploadedFiles[] = [
            'original_name' => $fileName,
            'saved_name' => $newFileName,
            'size' => $files['size'][$i]
        ];
    }

    // 13. 验证是否有成功上传的文件
    if (empty($uploadedFiles)) {
        throw new Exception('No valid files were uploaded');
    }

    // 后续代码（邮件发送等）保持不变...

} catch (Exception $e) {
    if (isset($pdo) && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
    
    // 记录错误
    error_log("Quote submission error: " . $e->getMessage());
    
    $response['message'] = $e->getMessage();
    echo json_encode($response);
    exit;
}

// 返回JSON响应
echo json_encode($response); 