<?php

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

$data = $username . "," . $email . "," . $password . "\n";

file_put_contents("users.txt", $data, FILE_APPEND);

echo "
<script>
alert('Registration Successful!');
window.location.href='index.php';
</script>
";

?>