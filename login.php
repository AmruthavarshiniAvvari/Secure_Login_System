<?php

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$users = file("users.txt");

$loginSuccess = false;

foreach($users as $user){

    $userData = explode(",", trim($user));

    $storedEmail = trim($userData[1]);
    $storedPassword = trim($userData[2]);

    if($email == $storedEmail &&
       $password == $storedPassword){

        $loginSuccess = true;
        break;
    }
}

if($loginSuccess){

    echo "
    <script>
    alert('Login Successful!');
    window.location.href='index.php';
    </script>
    ";

}else{

    echo "
    <script>
    alert('Invalid Email or Password!');
    window.location.href='index.php';
    </script>
    ";
}

?>