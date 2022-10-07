<?php

$data = array_map('trim', $_POST);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($data['user_firstname']) || empty($data['user_firstname']))
        $errors[] = "Le prénom est obligatoire";
    if (!isset($data['user_name']) || empty($data['user_name']))
        $errors[] = "Le nom est obligatoire";
    if (!isset($data['courriel']) || !filter_var($data['courriel'], FILTER_VALIDATE_EMAIL))
        $errors[] = "L'email n'a pas le bon format";

    if (empty($errors)) {
        echo "Success !";
    } else {
        echo "Il y a des erreurs :";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
    }
}
