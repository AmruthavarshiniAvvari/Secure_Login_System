<?php

$email = trim($_POST['email']);

if(!file_exists("users.txt")){
    file_put_contents("users.txt", "");
}

$users = file("users.txt");

$exists = false;

foreach($users as $user){

    $data = explode(",", trim($user));

    if(count($data) >= 2){

        $storedEmail = trim($data[1]);

        if($email === $storedEmail){

            $exists = true;
            break;
        }
    }
}

if($exists){
    echo "exists";
}else{
    echo "available";
}

?>