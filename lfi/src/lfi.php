<!DOCTYPE html>
<html>
<head>
    <title>LFI Example</title>
</head>
<body>

<h1>LFI Example</h1>
</br>
<p>Local File Inclusion Lab</p>
</br>
<p>Parameter is file</p>
</br>

<!-- Lorem Ipsum -->
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend justo id urna blandit, nec vulputate nulla laoreet. Donec ut purus sit amet elit auctor luctus. Nulla facilisi. Vivamus consequat vestibulum dui, eget feugiat velit accumsan id. Sed congue, ante eget vestibulum commodo, urna turpis tincidunt libero, eu rhoncus metus ligula nec eros.
</p>

<?php
$default_file = 'hello.txt';

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
