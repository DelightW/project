<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$firstname = test_input($_POST['firstname']);
$lastname = test_input($_POST['lastname']);
$email = test_input($_POST['email']);
?>
