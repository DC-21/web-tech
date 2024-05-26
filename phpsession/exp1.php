<?php
session_start();

if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
    echo "<p>Counter initialized</p>\n";
} else {
    $_SESSION["count"]++;
}

echo "<p>The counter is now <b>{$_SESSION["count"]}</b></p>".
     "<p>Reload this page to increment</p>";
?>
