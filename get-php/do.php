<?php
// config.js 的文件路径
$configFilePath = 'config.js';
// 读取 config.js 文件内容
$fileContent = file_get_contents($configFilePath);
// 检查是否成功读取文件
if ($fileContent === false) {
    die("读取文件失败");
}
$index = $_POST['index'];
// 替换 usedIndex 的值
$newContent = preg_replace('/usedIndex:\s*\d+/', 'usedIndex: ' . $index, $fileContent);
// 将修改后的内容写回 config.js 文件
if (file_put_contents($configFilePath, $newContent) === false) {
    die("写入文件失败");
}
echo "config.js 文件已成功修改！";
