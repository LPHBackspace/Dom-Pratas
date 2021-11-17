<?php

    $username = "";
    $email = "";
    $errors = array();

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'dompratass');

    // caso o botão de cadastro for clicado
    if (isset($_POST['register'])) {
        $username = mysql_real_escape_string($_POST['username']);
        $email = mysql_real_escape_string($_POST['email']);
        $password_1 = mysql_real_escape_string($_POST['password_1']);
        $password_2 = mysql_real_escape_string($_POST['password_2']);

        // caso algum dos campos seja preenchido incorretamente
        if(empty($username)) {
            array_push($errors, "Nome de usuário é necessário");
        }
        if(empty($email)) {
            array_push($errors, "E-mail é necessário");
        }
        if(empty($password_1)) {
            array_push($errors, "Senha é necessária");
        }
        if($password_1 != $password_2) {
            array_push($errors, "A senha está incorreta");
        }

        // caso não ocorra nenhum erro no cadastro
        if (count($errors) == 0){
            $password = md5($password_1);
            $sql = "INSERT INTO user (username, email, password)
                       VALUES ('$username', '$email', '$password')";
            mysqli_query($db, $sql);
        }


    }
?>