<?php
require_once 'config/config.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // 获取下载token
    $token = $_GET['token'] ?? '';

    if (empty($token)) {
        throw new Exception('Invalid download token');
    }

    // 连接数据库
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );

    // 验证token并获取文件信息
    $stmt = $pdo->prepare("
        SELECT qf.*, q.email 
        FROM quote_files qf 
        JOIN quotes q ON q.id = qf.quote_id 
        WHERE qf.download_token = ? 
        AND qf.token_expires > NOW()
    ");
    $stmt->execute([$token]);
    $file = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$file) {
        throw new Exception('Invalid or expired download token');
    }

    // 定义文件路径
    $filePath = 'file_uploads/' . $file['saved_name'];

    if (!file_exists($filePath)) {
        throw new Exception('File not found on server');
    }

    // 定义允许的文件类型和对应的MIME类型
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

    // 获取文件扩展名
    $extension = strtolower(pathinfo($file['original_name'], PATHINFO_EXTENSION));
    $mimeType = $allowedTypes[$extension] ?? 'application/octet-stream';

    // 清除之前的输出缓冲
    while (ob_get_level()) ob_end_clean();

    // 设置下载响应头
    header('Content-Type: ' . $mimeType);
    header('Content-Disposition: attachment; filename="' . $file['original_name'] . '"');
    header('Content-Length: ' . filesize($filePath));
    header('Cache-Control: no-cache, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');

    // 输出文件内容
    readfile($filePath);
    exit;

} catch (Exception $e) {
    // 记录错误
    error_log("Download error: " . $e->getMessage());
    
    // 返回错误信息
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
} 