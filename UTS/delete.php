<?php
if (isset($_GET['index'])) {
    $index = $_GET['index'];
    $tasks = file('tasks.txt');
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
        file_put_contents('tasks.txt', $tasks);
    }
}
header("Location: index.php");
exit;
?>
