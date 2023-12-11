<!DOCTYPE html>
<html>
<head>
    <title>XSS Lab</title>
    <style>
        h1 {
            background-color: lightblue;
            display: inline;
        }
    </style>
</head>
<body>
    <h1>XSS Lab</h1>

<?php

$DATA = $_GET['data'];
echo "</br>";
echo 'Parameter is data';
echo "</br>";
echo "</br>";

if (preg_match('/<[a-zA-z]/', $DATA )) {
	echo 'Your input is not allowed';
} else {
	echo 'Hello You';
	echo '</br>';
	echo '<a href="'. $DATA .'?PageIndex=1&Search=" style="width: 150px; position: relative;">JUST A LINK</a>';
}

?>

</body>
</html>
