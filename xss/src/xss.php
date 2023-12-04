<!DOCTYPE html>
<html>
<head>
    <title>XSS Example</title>
</head>
<body>

<h1>XSS Example</h1>

<!-- 用户输入作为 HTML 直接输出到页面 -->
<p>Welcome, <?php echo $_GET['username']; ?>!</p>

<!-- 漏洞点：使用用户输入作为 JavaScript 输出到页面 -->
<script>
    var userInput = "<?php echo $_GET['input']; ?>";
    document.write("<p>User input: " + userInput + "</p>");
</script>

</body>
</html>
