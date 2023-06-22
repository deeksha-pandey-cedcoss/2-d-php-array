<?php
$config = require "config/data.php";
?>
<form action="/update.php?key=<?php echo $_GET['id'] ?>" method="post">

    <label for="key">key :</label>
    <input type="text" name="key" value="<?php echo $_GET['id'] ?>" id="key" disabled>

    <label for="value">value :</label>
    <input type="text" name="value" value="<?php echo $config[$_GET['id']] ?>" id="value">

    <input type="submit" value="Update">
</form>