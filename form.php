<?php 

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

echo "Hello" . $username;
echo "Your password is " . $password;

    if (strlen($username) < 5 ) {
        echo 'Usernmame has to be longer than five character';
    }

?>