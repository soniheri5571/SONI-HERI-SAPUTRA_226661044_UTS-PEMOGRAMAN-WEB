<?php
if (file_exists('tasks.txt')) {
    $tasks = file('tasks.txt');
    foreach ($tasks as $index => $task) {
        echo "<li>";
        echo "<input type='checkbox' id='task$index' onchange='updateTask($index)' />";
        echo "<label for='task$index'>" . htmlspecialchars($task) . "</label>";
        echo "<a href='delete.php?index=$index'>Delete</a>";
        echo "</li>";
    }
}
?>