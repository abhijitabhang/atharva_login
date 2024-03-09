<?php
function cleanInput($input) {
    // Implement your input cleaning/validation logic here
    return htmlspecialchars(trim($input));
}
