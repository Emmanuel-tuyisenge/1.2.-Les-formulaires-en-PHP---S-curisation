
<?php

$errors = [];

if(empty($_POST['user_firstname']))
    {
        $errors['user_firstname'] = "Entrez votre nom svp!";
        echo $errors['user_firstname'];
    } 
    if(empty($_POST['user_lastname']))
    {
        $errors['user_lastname'] = "Entrez votre prénom svp!";
        echo $errors['user_lastname'];
    }
    if (!filter_var(($_POST['user_email']), FILTER_VALIDATE_EMAIL))
    {
        $errors['user_email'] = "Entrez votre email svp!";
        echo $errors['user_email'];
    }
    if(empty($_POST['phone_number']))
    {
        $errors['phone_number'] = "Entrez votre numero de téléphone svp!";
        echo $errors['phone_number'];
    }
    if(empty($_POST['thematic']))
    {
        $errors['thematic'] = "Choisissez une question svp.";
        echo $errors['thematic'];
    }
    if(empty($_POST['user_message']))
    {
        $errors['user_message'] = "Entrez votre message svp.";
        echo $errors['user_message'];
    }


    if(count($errors) == 0)
    {
        
        echo 'Merci ' . $_POST['user_firstname'] .' ', $_POST['user_lastname'] . 
        ' de nous avoir contacté à propos de ' .  $_POST['thematic'] . ' Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_email'] . 
        ' ou par téléphone au ' .   $_POST['phone_number'] . ' dans les plus brefs délais pour traiter votre demande : ' . $_POST['user_message'];
    }


