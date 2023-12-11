<!DOCTYPE html>
<html>
<head>
    <title>LFI Lab</title>
</head>
<body>

<h1>LFI Lab</h1>
</br>
<p>Local File Inclusion Lab</p>
</br>
<p>Parameter is file</p>
</br>

<!-- Lorem Ipsum -->
<p>
	組織成員清單(member.txt)：
</p>

<?php
$default_file = 'member.txt';

// 檢查輸入
function sanitizeInput($input) {
    $forbidden_words = array("sudo", "shadow"); // 過濾的關鍵字

    foreach ($forbidden_words as $word) {
        $input = str_ireplace($word, '', $input); // 將關鍵字替換為空白
    }
    return $input;
}

$user_input = isset($_GET['file']) && !empty($_GET['file']) ? $_GET['file'] : $default_file;

// 過濾關鍵字
$user_input = sanitizeInput($user_input);

include($user_input);
?>

</body>
</html>
