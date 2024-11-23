<?php
require_once 'config/config.php';

// 验证token
if (!isset($_GET['token']) || strlen($_GET['token']) !== 64) {
    die('Invalid download link');
}

$token = $_GET['token'];

try {
    // 连接数据库
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );

    // 通过token获取文件信息
    $stmt = $pdo->prepare("
        SELECT qf.saved_name, qf.original_name
        FROM quote_files qf 
        WHERE qf.download_token = ?
        LIMIT 1
    ");
    $stmt->execute([$token]);
    $fileInfo = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$fileInfo) {
        die('Invalid download link');
    }

    $filePath = 'file_uploads/' . $fileInfo['saved_name'];

    // 验证文件是否存在
    if (!file_exists($filePath)) {
        die('File not found');
    }

    // 获取文件类型
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($finfo, $filePath);
    finfo_close($finfo);

    // 设置下载头部
    header('Content-Type: ' . $mimeType);
    header('Content-Disposition: attachment; filename="' . $fileInfo['original_name'] . '"');
    header('Content-Length: ' . filesize($filePath));
    header('Cache-Control: no-cache, must-revalidate');
    header('Pragma: no-cache');

    // 输出文件内容
    readfile($filePath);
    exit;

} catch (Exception $e) {
    error_log("Download error: " . $e->getMessage());
    die('Error processing download request');
} 