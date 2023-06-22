<?php
$config = require "config/data.php";
if (isset($_POST['value'])) {
    $config[$_GET['key']] = $_POST['value'];
    $text = '<?php return '
        . var_export($config, true) . ';';
    file_put_contents(
        'config/data.php',
        $text
    );

    header("Location: /index.php");
}
?>